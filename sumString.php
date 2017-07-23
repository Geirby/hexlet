<?php
function addDigits($num)
{
    $sum = '';
    $arrNum = str_split($num);
    print_r($arrNum);
    $sum = array_sum($arrNum);
    echo "sum " . $sum . "\n";
    $count = count(str_split($sum));
    echo "count " . $count . "\n";
    // exit;

    if ($count >= 2) {
        echo "YES\n";
        $sum = addDigits($sum);
        ++$sum;
    }
    return $sum;

}
// END

echo addDigits(1119);