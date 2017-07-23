<?php
namespace App\Solution;

function cons($x, $y)
{
    return function ($func) use ($x, $y) {
        return $func($x, $y);
    };
}

function car(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($a, $b) {return $a;});
    // END
}

function cdr(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($a, $b) {return $b;});
    // END
}

$pair = cons(2, 3);
echo car($pair);
echo cdr($pair);