<?php
$files = json_decode(file_get_contents("files.json"), true);
$file = null;
$name = str_replace("/upload/osu/", "", $_SERVER['REQUEST_URI']);


foreach($files as $key => $_file) {
    if($key == $name) {
        $file = $_file;
    }
}

if($file == null) {
    echo "File not found";
    exit;
}

header('Content-Disposition: attachment; filename="'.$file.'"');
echo file_get_contents($file);