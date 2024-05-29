<?php

use Localization\RequestsCrowdin;

if (isset($_GET['start-generation']) && $_GET['start-generation'] == 1) {
    $projectId = PROJECT_ID;
    $api = new RequestsCrowdin();

    try {
        $files = $api->GetAllFilesTranslations($projectId);
        echo json_encode($files);
    } catch (ReflectionException $e) {
        echo json_encode([$e->getMessage()]);
    }
    exit;
}

if (isset($_GET['getAllStrings']) && $_GET['getAllStrings'] === 'all') {
    if (isset($_GET['fileId']) && $_GET['fileId'] !== 0) {
        $offset = 0;
        $projectId = PROJECT_ID;
        $fileId = intval($_GET['fileId']);
        if (isset($_GET['offset']) && $_GET['offset'] !== 0) {
            $offset = intval($_GET['offset']);
        }
        $api = new RequestsCrowdin();
        try {
            $strings = $api->GetAllStringsByFile($projectId, $fileId, $offset);
            echo json_encode($strings);
        } catch (ReflectionException $e) {
            echo json_encode([$e->getMessage()]);
        }
        exit;
    }
}

if (!empty($_GET['translate'])) {
    if ((isset($_GET['stringId']) && $_GET['stringId'] !== 0) &&
        (!empty($_GET['stringIdentifier']) && $_GET['stringIdentifier'] !== 0)) {
        $offset = 0;
        $projectId = PROJECT_ID;
        $stringId = intval($_GET['stringId']);
        $languageId = $_GET['translate'];
        $stringIdentifier = $_GET['stringIdentifier'];
        if (isset($_GET['offset']) && $_GET['offset'] !== 0) {
            $offset = intval($_GET['offset']);
        }
        $api = new RequestsCrowdin();
        try {
            $strings = $api->GetAllStringTranslate($projectId, $stringIdentifier, $stringId, $languageId, $offset);
            echo json_encode($strings);
        } catch (ReflectionException $e) {
            echo json_encode([$e->getMessage()]);
        }
        exit;
    }
}

