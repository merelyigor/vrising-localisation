<?php

$targetFile = "./json-local/Ukraine.json";

if (file_exists($targetFile)) {
    $fileTime = date("d/m/Y, H:i:s", filemtime($targetFile));
    echo json_encode([
        "status" => "success",
        "message" => "File exists.",
        "fileTime" => $fileTime
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "File not found."
    ]);
}