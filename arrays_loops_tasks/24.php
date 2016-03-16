<?php

$number = '1234555';
$length = strlen ($number);
$sum = 0;
for ($i = 0; $i < $length; $i++) {
    if ($number[$i] == 5) {
        $sum++;
    }
}
echo $sum;