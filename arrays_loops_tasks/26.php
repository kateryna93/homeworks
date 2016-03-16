<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $value = rand(1, 100);
    $arr[$i] = $value;
}
echo "Изхначальный массив: <br>";
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach ($arr as $key => $value_1) {
    if ($value_1 > 0 && $key % 2 == 0) {
        $arr_1[] = $value_1;
    }
    elseif ($value_1 > 0 && $key % 2 != 0) {
        $arr_2[] = $value_1;
    }
}
$count = count($arr_1);
$result = 1;
foreach ($arr_1 as $values) {
    $result *= $values;
}
for ($i = 0; $i < $count; $i++) {
    $result *= $arr_1[$i];
}
echo "Новый массив элементов с парными индексами:";
echo "<pre>";
print_r($arr_1);
echo "</pre>";
echo "Произведение эллементов с парными индексами:<br>";
echo "$result<br>";
echo "Элементы с непарнымы индексами: <br>";
foreach ($arr_2 as $value_2) {
    echo "{$value_2}<br>";
}