<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
    if ($value < 3) {
        echo "$value, ";
    } else if ($value == 3) {
        echo "$value<br>";
    }
    if ($value < 6 && $value > 3) {
        echo "$value, ";
    } else if ($value == 6) {
        echo "$value <br>";
    }
    if ($value < 9 && $value > 6) {
        echo "$value, ";
    } else if ($value == 9) {
        echo "$value <br>";
    }
}