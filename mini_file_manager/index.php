<?php

if ( isset($_GET['path'])) {
    $directoryToScan = $_GET['path'];
} else {
    $directoryToScan = __DIR__;
}

chdir($directoryToScan);
$result = scandir(getcwd());
unset($result[0]);

$items = [];
foreach ($result as $value) {
    $items[] = [
        'file_name' => $value,
        'file_path' => realpath($value),
        'file_size' => filesize($value) . 'bytes',
        'is_dir' => is_dir($value),
    ];
}

include 'file_manager.phtml';