<?php

//Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.

if (isset($_POST["textarea"])) {
    $string = $_POST["textarea"];

    echo myfunction($string);
}
else {
    $string = '';
}
function myfunction($string) {
    $newEmptyArr = []; //массив, в которы будем записывать введенные слова
    $expl = explode(' ', $string);
    foreach ($expl as $value) {
        $newEmptyArr[] = $value;
    }
    $rezult = array_unique($newEmptyArr); //проверяем уникальность введенных слов
    $count = count($rezult);
    return $count;
}


include 'countUnic.html';