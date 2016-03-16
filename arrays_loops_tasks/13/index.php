<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php function table($cols,$rows){
    echo '<div><h1>Таблица умножения</h1><table>';
    for ($i = 1; $i <= $cols; $i++) {
        echo '<tr align="center">';
        for( $j = 1; $j <= $rows; $j++) {
            $result = $i * $j;
            if ($i == 1 && $j != 1) {
                echo '<td class="multiplier_1">' . $result . '</td>';
            }
            if ($i == 1 && $j == 1) {
                echo '<td class="multiplier_2">' . $result . '</td>';
            }
            if ($i != 1 && $j == 1) {
                echo '<td class="multiplier_3">' . $result . '</td>';
            }
            if ($i != 1 && $j != 1) {
                echo '<td>' . $result . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table></div>';
}
table(10,10); ?>

</body>
</html>