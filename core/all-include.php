<?php
/**
 * API crowdin.com
 */
const API_KEY = '9915707fd2edb627088a85e3f9aac6e4af0c495fba0d3cf33b13156253a9ad0ba246d8e5fa73390e';
const PROJECT_ID = 519216; # V Rising
$_POST['$arr_localization'] = [];

include_once ABSPATH . '/core/helpers.php';
include_once ABSPATH . '/vendor/autoload.php';
include_once ABSPATH . '/core/class-requests.php';
include_once ABSPATH . '/core/api.core.php';