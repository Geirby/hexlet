<?php
$cube = function ($num)
{
  return $num * $num * $num;
};

//echo $cube(4);

function sumWithFunc ($a, $b, $func)
{
  if ($a > $b) {return 0;}
  return $func($a) + sumWithFunc($a + 1, $b, $func);
}
echo sumWithFunc(1, 5, function ($x) {return $x * $x * $x; });

/**
 * Определение напрямую:

<?php

$exponent = 3;
$func = function ($number) use ($exponent) {
return $number ** $exponent; // операция возведения в степень
};

8 == $func(2); // 2^3
Определение через вызов функции:

<?php

function power($exponent)
{
return function ($number) use ($exponent) {
return $number ** $exponent; // операция возведения в степень
}
};

$func = power(3);
8 == $func(2); // 2^3
 */

$pair = cons(1, 5);