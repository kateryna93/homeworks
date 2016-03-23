<?php

/*Создать гостевую книгу, где любой человек может оставить комментарий в текстовом
поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.*/

if (!is_file('reviews.txt')) {
    echo "Пока нет отзывов! <br />";
    $file = fopen('reviews.txt', 'a+');
}
elseif (isset($_POST['textarea']) && $_POST['textarea']) {
    $file = fopen('reviews.txt', 'a+');
    $text = $_POST['textarea'];
    $newReviews = fwrite($file, $text .PHP_EOL);
    $arr = file('reviews.txt');//превращаем файл в массив построчно
    foreach ($arr as $key => $value) {
        $key_1 = $key + 1;//нумерация каждого отзыва
        echo "Отзыв $key_1: $value <br><br>";
    }
}
else {
    echo 'нужно заполнить поле!';
}


include 'book_reviews.html';