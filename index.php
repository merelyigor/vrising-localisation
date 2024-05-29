<?php
/**
 * API crowdin.com
 * Проект для генерації локалізації для гри V Rising
 * https://steamcommunity.com/sharedfiles/filedetails/?id=3246111312
 * https://github.com/merelyigor/V-Rising-Translations-UA
 * https://vrising-ua.eremenko.top/
 * https://www.youtube.com/watch?v=lcD2r9Lg7yU
 */

/** Absolute path to the index directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

include_once './core/all-include.php';
$baseUrl = getBaseUrl();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Онлайн генератор Української локалізації для гри V Rising</title>
    <meta name="description"
          content="Згенеруйте українську локалізацію для гри V Rising за допомогою онлайн генератора. Використовуйте актуальні дані з crowdin.com">
    <!-- Додавання іконок -->
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/img/favicon.ico" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/img/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= $baseUrl ?>/img/apple-touch-icon.png">
    <link rel="manifest" href="<?= $baseUrl ?>/img/site.webmanifest">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/img/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/img/android-chrome-512x512.png" sizes="512x512">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet preload" href="<?= $baseUrl ?>/assets/style.min.css?ver=<?= generateRandomHash() ?>"
          as="style" media="all">
</head>
<body>
<div class="content" itemscope itemtype="http://schema.org/Article">

    <div class="logo">
        <img src="<?= $baseUrl ?>/img/logo.png" alt="V Rising logo">
    </div>
    <p>TEST</p>

    <h1 itemprop="headline">Онлайн генератор Української локалізації для гри V Rising</h1>

    <h2>
        На сторінці ви зможете згенерувати для себе
        самий актуальний на данний момент файл Ukraine.json для локалізації
        гри V Rising
    </h2>

    <div itemprop="articleBody">
        <p>
            Більше про локалізацію та встановлення української мови у <i>V Rising</i> читайте у
            <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=3246111312" target="_blank">
                посібнику по посиланню у <i class="fab fa-steam"></i> Steam.
            </a>
        </p>
        <p id="textBlock" class="collapsed">
            Генерація працює у реальному часі, тому доведеться зачекати
            доки всі переклади будуть завантаженні з офіційного проєкту на сайті
            <a href="https://crowdin.com/project/v-rising-game/uk" target="_blank">
                crowdin.com/project/v-rising-game/uk
            </a>
            через влаштоване API на цій сторінці, це одна з перших версій генерації.<br><br>
            Відбувається паралельно по 40 запитів, ви побачите процес
            перекладу нище для кожної строки та файлу
            як тільки процес дойде до кінця ви побачите кнопку для
            завантаження щойно згенерованого файлу <i>Ukraine.json</i>
            та також впливаюче вікно для збереження.<br><br>
            Генерація бере переклади через API crowdin з офіційного проєкту
            по локалізації гри <i>V Rising</i> фрази перекладів у файл потрапляють
            на основі рейтенгу (оцінок юзерами) під фразами на
            <a href="https://crowdin.com/project/v-rising-game/uk" target="_blank">
                проєкті crowdin.com
            </a>
            а також по зарезервованим нікнеймам перекладачів чьї переклади найкращі на мою думку.
            Список нікнеймів буде розширятись з часом або навіть буде функція
            додавання їх на сторінці перед генерацією! Насолоджуйтесь Українською мовою!
        </p>
        <button id="toggleButton">Показати все</button>

        <div class="all-processing">
            <div class="progress-bar-container">
                <div class="progress-bar" id="progressBar"></div>
                <div class="progress-text" id="progressText">0%</div>
            </div>
            <div class="container-spinner">
                <div class="spinner"></div>
            </div>
            <div class="text-processing">
                <strong>
                    Тут буде відображено текст процесу завантаження
                </strong>
            </div>
        </div>

        <div class="container-spinner-text">
            <p>
                <strong>
                    Не закривайте браузер та цю вкладку,
                    дочекайтесь будь ласка поки переклад згенеруються на основі
                    актуальних данних по перекладам з проекту
                    <a href="https://crowdin.com/project/v-rising-game/uk" target="_blank">crowdin.com/project/v-rising-game/uk</a>
                    Та вилізе вікно для збереження актуального файлу в кінці процесу!!!</strong><br><br>
                Приблизний час очікування 5-15хв.
                бо сервер маленький та паралельно може ще хтось генерує, через що на сервер іде більше навантаження.
            </p>
        </div>

        <div class="button-wrap">
            <button id="generateBtn">Згенерувати актуальну локалізацію!</button>

            <a id="downloadLink" href="#" download="Ukraine.json">
                Завантажити вже згенерований вами файл Ukraine.json
            </a>
            <div id="save-info-text">
                <span id="saveTime"></span>
                <span id="text">
                 Для того, щоб згенерувати новий файл, запустіть генерацію повторно по кнопці вище (Згенерувати актуальну локалізацію!) та дочекайтесь завершення!
                Після цих дій новий файл так само буде збережено для вас, але з часом файли видаляються тому в майбутньому можливо прийдеся генерувати повторно!
            </span>
            </div>
        </div>

        <div class="social-links">
            <a href="https://discord.gg/Ntf2QAY8py"
               target="_blank" title="Приєднуйтесь до нас у Discord">
                <i class="fab fa-discord"></i>
            </a>
            <a href="https://www.twitch.tv/merelyigor"
               target="_blank" title="Слідкуйте за мною на Twitch">
                <i class="fab fa-twitch"></i>
            </a>
            <a href="https://steamcommunity.com/id/merelyigor"
               target="_blank" title="Відвідайте мій Steam профіль">
                <i class="fab fa-steam"></i>
            </a>
            <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=3246111312"
               target="_blank" title="Прочитайте наш посібник Steam">
                <i class="fas fa-book"></i>
            </a>
            <a href="https://t.me/MerelyiGor"
               target="_blank" title="Я у Telegram">
                <i class="fab fa-telegram"></i>
            </a>
            <a href="https://github.com/merelyigor"
                   target="_blank" title="Я на Github">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>

</div>

<script src="<?= $baseUrl ?>/assets/main.min.js?ver=<?= generateRandomHash() ?>"
        type="text/javascript" async="async"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VV69FM0EJF"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-VV69FM0EJF');
</script>

</body>
</html>
