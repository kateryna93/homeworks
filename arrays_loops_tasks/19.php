<?php

$day = date("l");
$arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($arr as $item) {
    if ($item === $day) {
        echo "<i>$item</i><br />";
    } else {
        echo "$item <br />";
    }
}