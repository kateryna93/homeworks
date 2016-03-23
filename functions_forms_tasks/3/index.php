<?php

/*Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.*/

if ( isset($_POST['send_request']) ) {

    echo '<pre>';
    print_r($_FILES['filename']);
    echo '</pre>';

    if ($_FILES["filename"]["size"] > 1024 * 3 * 1024) {
        echo("Размер файла превышает три мегабайта");
        exit;
    }

    // Проверяем загружен ли файл
    if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {//проверяем был ли файл загружен при помощи HTTP POST
        // Если файл загружен успешно, перемещаем его из временной директории в конечную
        move_uploaded_file($_FILES["filename"]["tmp_name"], __DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"]);
        $lines = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"]);//Контент из загруженного файла
        $arrFromLines = explode(" ", $lines);
    } else {
        echo("Ошибка загрузки файла <br>");
        die;
    }


    $num = $_POST['num'];
    if (!$num){
        die("Sorry, please enter the number ! ");
    }
    echo "Array of source file: ";

    echo '<pre>';
    print_r($arrFromLines);
    echo '</pre>';

    foreach ($arrFromLines as $key => $value) {
        $wordLength = mb_strlen($value);
        if ($wordLength > $num) {
            unset ($arrFromLines[$key]);
        }
    }
    echo "Results file array with the words no more than {$num} characters: ";
    echo '<pre>';
    print_r($arrFromLines);
    echo '</pre>';

} else {
    // инициализируем нужные переменные
    $filename = '';
    $text = "";
}

include 'check_length.phtml';
