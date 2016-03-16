<?php

function  reverse($string) {
    $string = substr($string, 0, -1);
    $pieces = explode(". " , $string);//Разделяем исходную строку по разделителю на несколько строк
    $reversePieces = array_reverse($pieces);
    foreach ($reversePieces as $value) {
        echo $value . '. ';
    }
}

reverse (' А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.');