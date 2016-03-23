<?php

if (!is_file('reviews.txt')) {
    echo "Пока нет отзывов! <br>";
    $file = fopen('reviews.txt', 'a+');//создаем файл отзывов
}
elseif (isset($_POST['textar']) && $_POST['textar']) {
    $file = fopen('reviews.txt', 'a+');
    $text = strip_tags($_POST['textar'], '<b>');//удаляем все теги кроме <b>
    $pozition = strpos($text, 'запрещенное слово');
    $pozition_1 = strpos($text, 'запрещенное слово 2');
    if ($pozition || $pozition === 0 || $pozition_1 || $pozition_1 === 0){
        die ("Некорректный комментарий");
    }
    $new_reviews = fwrite($file, $text.PHP_EOL);
    $arr = file('reviews.txt');//превращаем файл в массив построчно
    foreach ($arr as $key => $value) {
        $key_1 = $key + 1;//нумерация отзывов
        echo "Отзыв $key_1: $value <br><br>";
    }
}
else {
    echo 'Напишите свой комментарий!';
}



include 'guest_book.html';