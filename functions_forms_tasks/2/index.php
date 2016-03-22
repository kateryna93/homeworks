<!--Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.-->

<?php

if ( !empty($_POST) ) {

    $area1 = $_POST['textarea1'];

    function topThree($area){
        $areaPieces = explode(" ", $area);

        echo '<pre>';
        print_r($areaPieces);// Распечатываем массив из textarea
        echo '</pre>';

        for ($i = 1; $i <= 3; $i++) {
            $tmpMax = '';
            foreach ($areaPieces as $key => $value) {
                $wordLength = mb_strlen($value);
                if ($wordLength > $tmpMax) {
                    $tmpMax = $wordLength;
                    $tmpKey = $key;
                }
            }
            $listOfLongWords[] = $areaPieces[$tmpKey];//Записываем в массив самое длинное слово
            unset($areaPieces[$tmpKey]);//Удаляем каждое последующие длинное слово
        }
        echo "ТОП-3 слов в порядке убывания: <br>";
        foreach ($listOfLongWords as $listOfLongWord) {
            echo $listOfLongWord . '<br>';
        }
    }
    topThree($area1);
}



include 'form.phtml';