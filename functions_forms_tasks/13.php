<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко
черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня
черешня черешня груша яблоко черешня вишня черешня';

function str_count($word, $source) {
    return substr_count($source, $word);//количество вхождений слова в массив
}

$apple = str_count('яблоко', $string);
$cherries = str_count('черешня', $string);
$cherry = str_count('вишня', $string);
$pear = str_count('груша', $string);

$fruits = ['яблоко' => $apple, 'черешня' => $cherries, 'вишня' => $cherry, 'груша' => $pear];
arsort($fruits);//сортируем по значению
foreach ($fruits as $key => $val) {
    echo $key . ' - ' . $val . '<br>';
}