<?php

$numbers = [1, 20, 15, 17, 24, 35];
$lastArrayElement = $numbers[count($numbers)-1];

$result = 0;
foreach ($numbers as $number) {
    if ($number == $lastArrayElement) {
        echo $number . ' = ';
    } else {
        echo $number . ' + ';
    }
    $result += $number;
}
echo $result;