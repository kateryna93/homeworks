<?php

if (!empty($_POST)) {
    $area1 = $_POST['textarea1'];
    $area2 = $_POST['textarea2'];

    echo "<pre>";
    print_r($_POST);//Проверка массива
    $area1Pieces = explode(" ", $area1);
    $area2Pieces = explode(" ", $area2);
    echo "</pre>";

    function getCommonWords($a, $b)
    {
        foreach ($a as $key1 => $value1) {
            foreach ($b as $key2 => $value2) {
                if ($a[$key1] == $b[$key2]) {
                    $area3Pieces[] = $a[$key1];
                }
            }
        }
        echo 'Список слов, которые есть в первом и втором поле ввода:<br>';
        foreach ($area3Pieces as $area3Piece) {
            echo $area3Piece . '<br>';
        }
    }

    getCommonWords($area1Pieces, $area2Pieces);
}

include 'common_words_form.phtml';