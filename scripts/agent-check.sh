#!/usr/bin/env bash
#
# vrising-localisation: єдиний виконуваний quality gate для AI-агента.
#
# Навіщо: текстове правило «перевір перед здачею» тримається на пам'яті моделі й
# першим випадає у слабкої або локальної моделі. Скрипт не тримається ні на чому:
# він або завершився з кодом 0, або ні. Заявляти «перевірки пройшли» без коду 0
# заборонено.
#
# Профілі: preflight, docs, php, frontend, full
#
# Гейт НЕ деструктивний: не стирає БД, не запускає руйнівні міграції, не деплоїть,
# не пише на production і не змінює git-історію.

set -euo pipefail

PROJECT_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
readonly PROJECT_ROOT
cd "$PROJECT_ROOT"

readonly PHP_CONTAINER="${AGENT_PHP_CONTAINER:-vrising-localisation-php-fpm}"
readonly RULE_MIRRORS=(AGENTS.md .cursorrules CLAUDE.md QWEN.md)
readonly RULE_REFERENCE='docs/AI_AGENT_RULES_REFERENCE.md'
# Коротка карта мусить лишатись картою, а не знову розростись у довідник.
readonly RULE_MAP_MAX_LINES=200

fail() {
    printf 'FAIL: %s\n' "$1" >&2
    exit 1
}

step() {
    printf '\n== %s ==\n' "$1"
}

note() {
    printf '   %s\n' "$1"
}

run() {
    printf '   $ %s\n' "$*"
    "$@" || fail "$1: ненульовий код виходу"
}

have() {
    command -v "$1" >/dev/null 2>&1
}

container_running() {
    docker inspect -f '{{.State.Running}}' "$1" 2>/dev/null | grep -qx true
}

require_php_container() {
    have docker || fail 'docker недоступний'
    container_running "$PHP_CONTAINER" || fail "контейнер $PHP_CONTAINER не запущений"
}

# Змінені файли за розширенням: tracked-правки + staged + нові. Повний sweep свідомо
# не робиться, щоб гейт не падав на pre-existing боргу в нечіпаних файлах.
changed_files() {
    {
        git diff --name-only --diff-filter=ACMR -- "$1"
        git diff --name-only --diff-filter=ACMR --cached -- "$1"
        git ls-files --others --exclude-standard -- "$1"
    } 2>/dev/null | sort -u
}

check_rules() {
    step 'Ідентичність та розмір rule-файлів'
    local mirror
    for mirror in "${RULE_MIRRORS[@]}"; do
        test -f "$mirror" || fail "немає rule-файлу $mirror"
    done
    for mirror in "${RULE_MIRRORS[@]:1}"; do
        cmp -s AGENTS.md "$mirror" || fail "$mirror не ідентичний AGENTS.md"
    done
    note "дзеркала ідентичні: ${RULE_MIRRORS[*]}"

    test -f "$RULE_REFERENCE" || fail "немає нормативного довідника $RULE_REFERENCE"

    local map_lines
    map_lines="$(wc -l < AGENTS.md | tr -d ' ')"
    if [ "$map_lines" -gt "$RULE_MAP_MAX_LINES" ]; then
        fail "AGENTS.md розрісся до $map_lines рядків (ліміт $RULE_MAP_MAX_LINES); деталі — у $RULE_REFERENCE"
    fi
    note "AGENTS.md: $map_lines рядків (ліміт $RULE_MAP_MAX_LINES)"

    local duplicate
    duplicate="$(
        sed -nE 's/^- §([0-9]+\.[0-9]+).*/\1/p' "$RULE_REFERENCE" | sort | uniq -d | head -1
    )"
    test -z "$duplicate" || fail "дублікат номера правила §$duplicate у $RULE_REFERENCE"
    note 'дублікатів номерів правил немає'
}

check_whitespace() {
    step 'git diff --check (whitespace, конфліктні маркери)'
    git diff --check || fail 'git diff --check знайшов проблеми'
    git diff --cached --check || fail 'git diff --cached --check знайшов проблеми'
    note 'чисто'
}

check_php_lint() {
    step 'php -l для змінених PHP-файлів'
    local file found=0 mode=''
    if have docker && container_running "$PHP_CONTAINER"; then
        mode='container'
    elif have php; then
        mode='host'
    else
        fail "немає ні контейнера $PHP_CONTAINER, ні локального php — синтаксис PHP неможливо перевірити"
    fi
    note "режим: $mode"
    while IFS= read -r file; do
        [ -n "$file" ] || continue
        [ -f "$file" ] || continue
        found=1
        printf '   php -l %s\n' "$file"
        if [ "$mode" = 'container' ]; then
            docker exec "$PHP_CONTAINER" php -l "/www/vrising-localisation/public/$file" >/dev/null \
                || fail "php -l впав на $file"
        else
            php -l "$file" >/dev/null || fail "php -l впав на $file"
        fi
    done < <(changed_files '*.php')
    [ "$found" = "1" ] || note 'змінених .php немає'
}

report_preflight() {
    step 'Стан робочого дерева'
    note "проєкт: $PROJECT_ROOT"
    note "гілка: $(git branch --show-current 2>/dev/null || echo '(detached)')"
    git status --short | sed 's/^/     /'
    step 'Середовище'
    if have docker && container_running "$PHP_CONTAINER"; then
        note "OK       контейнер $PHP_CONTAINER запущений"
    else
        note "ВІДСУТНІЙ контейнер $PHP_CONTAINER (частина профілів буде недоступна)"
    fi
    local tool
    for tool in git rg docker php node npm; do
        if have "$tool"; then note "OK       $tool"; else note "ВІДСУТНІЙ $tool"; fi
    done
    check_rules
    step 'Preflight пройдено'
    note 'Визнач ОДНУ ціль і Definition of Done.'
    note 'Читай лише документи своєї категорії з таблиці маршрутизації в AGENTS.md.'
    note 'Без коду 0 у профілі своєї категорії успіх не заявляти.'
}

check_frontend() {
    step 'Frontend build: .'
    have npm || fail 'npm недоступний — frontend build неможливо виконати'
    (cd '.' && npm run build) || fail 'npm run build впав'
    compgen -G 'public/assets/*' >/dev/null || fail 'немає зібраного артефакту public/assets/*'
    note 'зібрані артефакти на місці'
    check_whitespace
}

PROFILE="${1:-}"
if [ "$#" -gt 0 ]; then
    shift
fi

case "$PROFILE" in
    preflight)
        report_preflight
        ;;
    docs)
        check_rules
        check_whitespace
        ;;
    php)
        check_rules
        check_php_lint
        check_whitespace
        ;;
    frontend)
        check_rules
        check_frontend
        ;;
    full)
        check_rules
        check_php_lint
        check_frontend
        ;;
    *)
        printf 'Usage: %s {preflight|docs|php|frontend|full}\n' "$0" >&2
        exit 2
        ;;
esac

printf '\nAgent gate passed: %s\n' "$PROFILE"
