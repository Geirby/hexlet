<?php
/***
 * @param $startNum
 * @param $endNum
 * Напишите функцию sumDouble, которая принимает на вход два числа: начало последовательности и конец последовательности,
 * а возвращает сумму возведенных в квадрат чисел последовательности с шагом 2. То есть из последовательности от 3 до 7 будут взяты числа 3, 5, 7.

Пример:

8 * 8 + 10 * 10 + 12 * 12 + 14 * 14 == sumDouble(8, 14);
3 * 3 + 5 * 5 == sumDouble(3, 6);
 */

function sumDouble($startNum, $endNum)
{
    $result = 0;
    for($i = $startNum; $i <= $endNum; $i++) {
        $result += $i * $i;
        echo $i . "\n";
        $i++;

    }
    echo $result;
}

sumDouble(8, 14);

