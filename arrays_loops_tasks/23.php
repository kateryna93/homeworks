<?php

$number = '123';
$sum = 0;
$length = strlen ($number);
for ($i = 0; $i < $length; $i++) {
    $sum += $number[$i];
}
if (!$sum) {
    echo "\$number должно быть строкой, элемент которой является целым числом";
}
else {
    echo $sum;
}