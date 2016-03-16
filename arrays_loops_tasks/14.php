<?php

$numbers = [4, 2, 5, 19, 13, 0, 10];

foreach ($numbers as $e) {
    if ($e == 2 or $e == 3 or $e == 4) {
        echo "Есть!"; break;
    } else {
        echo "Нет!";
    }
}