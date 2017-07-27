<?php
/**
 * Реализуйте функцию binarySum, которая складывает переданные бинарные числа (как строки):
 *
 * '11' == binarySum('10', '01');
 * '10010' == binarySum('1101', '101');
 */

namespace App\Solution;

// BEGIN (write your solution here)
function binarySum($a, $b)
{
    //first step: what length of string is longer? Equalise it.
    if (strlen($a) > strlen($b)) {
        $addZeroCount = strlen($a) - strlen($b);
        $addZero = '';
        for ($j = 0; $j < $addZeroCount; $j++) {
            $addZero .= '0';
        }
        $b = $addZero . $b;
    } else {
        $addZeroCount = strlen($b) - strlen($a);
        $addZero = '';
        for ($j = 0; $j < $addZeroCount; $j++) {
            $addZero .= '0';
        }
        $a = $addZero . $a;
    }

    $longerCount = (strlen($a) >= strlen($b)) ? strlen($a) - 1 : strlen($b) - 1;
    //second step: get both string from last symbols
    $result = '';
    $tmpVar = 0;
    for ($i = 0; $i <= $longerCount; $i++) {

        $firstNum = substr($a, $longerCount - $i, 1);
        $secondNum = substr($b, $longerCount - $i, 1);
        $sum = $firstNum + $secondNum + $tmpVar;
        echo $sum . PHP_EOL;
        switch ($sum) {
            case 0 :
                $result .= '0';
                $tmpVar = 0;
                break;
            case 1 :
                $result .= '1';
                $tmpVar = 0;
                break;
            case 2:
                $result .= '0';
                $tmpVar = 1;
                break;
            case 3:
                $result .= '1';
                $tmpVar = 1;
                break;
        }
    }
    $addResult = ($tmpVar) ? $tmpVar : '';
    $result = strrev($result . $addResult);
//    echo 'result = ' . $result . PHP_EOL;
    return $result;
}
// END

//example
//print_r(binarySum('10', '1'));

