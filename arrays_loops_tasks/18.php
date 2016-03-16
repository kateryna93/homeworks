<?php

$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пьятница', 'Суббота', 'Воскресенье'];
foreach ($days as $value) {
    if ($value === 'Суббота' || $value === 'Воскресенье') {
        echo "<b>$value</b><br>";
    } else {
        echo "$value<br>";
    }
}