<?php

$targetDir = "./json-local/";
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Перевіряємо чи файл уже існує
    if (file_exists($targetFile)) {
        // Якщо файл існує, видаляємо його перед завантаженням нового
        unlink($targetFile);
    }

    // Переїжджаємо завантажений файл у цільову директорію
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo json_encode(["status" => "success", "message" => "File uploaded and overwritten successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Sorry, there was an error uploading your file."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
