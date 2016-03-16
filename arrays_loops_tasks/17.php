<?php

$month = date("F");
$months = ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October',
    'November', 'December'];
foreach ($months as $value) {
    if ($value === $month) {
        echo "<b>$value</b><br>";
    } else {
        echo "$value <br>";
    }
}