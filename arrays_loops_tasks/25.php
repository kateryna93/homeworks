<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $value = rand();
    $arr[$i] = $value;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
$min = min ($arr);
$max = max($arr);
echo "$min<br>";
echo "$max<br>";
foreach ($arr as $key => $value) {
    if ($value == $min) {
        echo "$key Ключ с минимальным значением<br>";
        $arr[$key] = $max;
    }
    elseif ($value == $max) {
        echo "$key Ключ с максимальным значением<br>";
        $arr[$key] = $min;
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach ($arr as $key => $value) {
    if ($value == $min) {
        echo "$key Ключ с минимальным значением<br>";
    }
    elseif ($value == $max) {
        echo "$key Ключ с максимальным значением<br>";
    }
}