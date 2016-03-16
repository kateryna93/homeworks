<?php

$numbers = [2, 5, 9, 15, 0, 4];

foreach ($numbers as $number) {
    if ($number > 3 && $number < 10) {
        echo $number . '<br>';
    }
}