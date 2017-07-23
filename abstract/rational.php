<?php
/*
Реализуйте функцию subRat, которая производит вычитание рациональных чисел. При этом (с точки зрения внутренней реализации)
 функция возвращает в качестве результата новую пару (т.е. исходные пары, являющиеся параметрами функции, не изменяются).
Реализуйте функцию equalRat, которая делает проверку двух рациональных чисел на равенство.
 */


namespace Pairs;
function cons ($a ,$b)
{
    return function($func) use ($a, $b) {
        return $func($a, $b);
    };
}

function car($pair)
{
    return $pair(function ($a, $b) {return $a;});
}

function cdr($pair)
{
    return $pair(function ($a, $b) {return $b;});
}

namespace App\Rational;

use function Pairs\cons;
use function Pairs\car;
use function Pairs\cdr;

function makeRat($numer, $denom)
{
    return cons($numer, $denom);
}

function numer($rat)
{
    return car($rat);
}

function denom($rat)
{
    return cdr($rat);
}

// BEGIN (write your solution here)
function subRat($a, $b)
{
    return makeRat($a, $b);
}

function equalRat()
{
    return true;
}
// END

print_r(subRat(5.1, 5));
// END