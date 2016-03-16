<?php

$i = 2;
while ($i <= 10) {
    $j = 1;
    while ($j <= $i) {
        echo 'x';
        $j++;
    }
    echo "<br>";
    $i = $i + 2;
}