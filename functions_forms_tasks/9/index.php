<?php

// Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.

if ($_POST["string"]) {
    $string = $_POST["string"];
}
else {
    die("Заполните поле формы!");
}
function reverseString($string) {
    $count = strlen($string);
    $emptyString = '';
    for ($i = $count - 1; $i >= 0; $i--) { //переворачиваем ключи в обратном напрвлении
        $emptyString .= $string[$i];
    }
    return $emptyString;
}
echo reverseString($string);


include 'reverse_string.html';