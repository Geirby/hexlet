<?php
/**
Реализуйте функцию binarySum, которая складывает переданные бинарные числа (как строки):

'11' == binarySum('10', '01');
'10010' == binarySum('1101', '101');
 */

namespace App\Solution;

// BEGIN (write your solution here)
function binarySum($a, $b)
{
    $countA = strlen($a);
    for ($i = 1; $i <= $countA; $i++) {
       echo substr($a, $countA - $i, 1) . "\n";
    }

    return ;
}
// END

print_r(binarySum('110100', '1101'));
//10 = 2
//11 = 3
//100 = 4
//101 = 5
//    110 = 6
//    111 = 7
//    1000 = 8
