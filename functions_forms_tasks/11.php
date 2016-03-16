<?php

function toUpperCase ($string) {
    $string = substr($string, 0, -1);
    $pieces = explode(". " , $string);//Разделяем исходную строку по разделителю на несколько строк
    foreach ($pieces as $value) {
        $value =  mb_strtoupper(mb_substr($value, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($value, 1, mb_strlen($value), 'UTF-8');//Преобразуем первую букву каждой строки в заглавную
        echo $value . '. ';
    }
}

toUpperCase ('а Васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь,
все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.');