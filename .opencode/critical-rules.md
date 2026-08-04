# Критичні заборони — vrising-localisation

- `git commit`/`git push` — тільки з явним дозволом.
- Джерело перекладів — Crowdin API; проєкт не має власної БД.
- `API_KEY` у `core/all-include.php` — відомий хардкод-борг; новий код писати проти ENV, не копіювати цей патерн.
- Crowdin rate-limited — кешувати в `json-local/`, не перезапитувати те саме повторно.
- `save-json.php` приймає будь-який файл без перевірки типу/розміру — за зміни цього ендпоінта додати валідацію.
- `usernames_translation_priority` (`RequestsCrowdin.php`) не змінювати без явного запиту.
- Production — read-only; правильний шлях: local → перевірка → commit → deploy.
