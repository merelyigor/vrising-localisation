<?php
/**
 * API crowdin.com
 * Токен читається з ENV (CROWDIN_API_KEY у docker/.env.local і .env.prod),
 * не хардкодиться в коді — попереднє значення тут було закомічено в git
 * і потребує ротації на боці Crowdin (власник, не код).
 */
const PROJECT_ID = 519216; # V Rising
$_POST['$arr_localization'] = [];

include_once ABSPATH . '/core/helpers.php';
include_once ABSPATH . '/vendor/autoload.php';
include_once ABSPATH . '/core/RequestsCrowdin.php';
include_once ABSPATH . '/core/api.core.php';