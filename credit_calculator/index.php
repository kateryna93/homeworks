<?php

$percents = [1 => 9, 2 => 11, 3 => 13, 4 => 15, 5 => 17, 6 => 19, 7 => 21,];//год => процент
define('MAX_YEAR', 7);

if ( isset($_GET['submit']) ) {

    $purchaseCost = $_GET['purchaseCost'];
    $initialFeePercent = $_GET['initialFee'] / 100 * $purchaseCost;
    $loanTerms = $_GET['loanTerms'];
    if ($loanTerms > MAX_YEAR) {
        echo "Кредитный период не более 7 лет";
        exit();
    }

    $leftPurchaseCost = $purchaseCost - $initialFeePercent;

    if ( array_key_exists($loanTerms, $percents) ) {
        $percent = $percents[$loanTerms];
    }

    $percentSum = $leftPurchaseCost * ($percent / 100);
    $percentYearSum = $percentSum * $loanTerms;
    $totalSum = $leftPurchaseCost + $percentYearSum;
    $monthsCount = $loanTerms * 12;
    $monthSum = floor($totalSum / $monthsCount);

        //Создание таблицы платежей
        $rows = $monthsCount;
        $cols = 3;
        echo "Сумма, которую нужно выплатить за текущий период $totalSum";
        echo '<table border="1"><tr><td>Месяц</td><td>Платеж</td><td>Остаток</td></tr>';
        for ( $tr = 1; $tr <= $rows; $tr++ ) {
            $totalSum -= $monthSum;
            echo '<tr>';
            for ( $td = 1; $td <= $cols; $td++ ) {
                if ( $td == 1 ) {
                    echo "<td>$tr месяц</td>";
                }
                if ( $td == 2 ) {
                    echo "<td>$monthSum</td>";
                }
                if ( $td == 3 ) {
                    echo '<td>' .$totalSum . '</td>';
                }
            }
            echo  '</tr>';
        }
        echo '</table>';


} else {
    $purchaseCost = '';//Сумма покупки
    $initialFeePercent = '';//Сумма первого взноса
    $loanTerms = '';//Срок кредитования
    $leftPurchaseCost = '';//Сумма, которую осталось оплатить без %
    $percent = '';//Процент n-го года из массива
    $percentSum = '';//Процентная сумма за год
    $percentYearSum = '';//Процентная сумма за n годов
    $totalSum = '';//Вся сумма, которую нужно выплатить за n годов
    $monthsCount = '';//Количество месяцев
    $monthSum = '';//Помесячный платеж
    $leftMonthSum = '';//Сумма, которая остается каждый месяц
}

include "calc.phtml";