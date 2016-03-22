<?php

/*Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр
функции*/

function listfiles($dir) {
    $fileslist = scandir($dir);
    foreach ($fileslist as $value) {
        $value = iconv("windows-1251", "utf-8", $value);
        echo "{$value} <br />";
    }
}
$dir = 'directory';
listfiles($dir);