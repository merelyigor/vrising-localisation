<?php

/**
 * Help func
 */
function dd($var_dump, $html = false, $die = false)
{
    echo '<pre style="color:#850085;z-index:999999999!important;position:relative;background: chartreuse;">';
    if ($html) var_dump(htmlspecialchars($var_dump, ENT_QUOTES)); else var_dump($var_dump);
    echo '</pre>';
    if ($die) {
        die();
    }
}

/**
 * @throws \Random\RandomException
 */
function generateRandomHash($length = 10) {
    return substr(bin2hex(random_bytes($length)), 0, $length);
}

function getBaseUrl(): string
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host;
}
