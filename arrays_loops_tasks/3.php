<?php

$numbers = [26, 17, 136, 12, 79, 15];
echo 'Сумму квадратов чисел ';
$result = 0;
foreach ($numbers as $number) {
    echo $number . ' ';
    $squeareNumber = $number * $number;
    $result += $squeareNumber;
}
echo ' равна ' . $result;