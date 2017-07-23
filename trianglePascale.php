<?php
/****
0:		1
1:     1 1
2:    1 2 1
3:   1 3 3 1
4:  1 4 6 4 1
5: 1 5 10 10 5 1
1 6 15 20 15 6 1
 *
 */
function createPascale()
{
    $arrRows = [[1]];

    for($i = 0; $i < 4; $i++) {
        $row = [1];
        for($j = 0; $j < count($arrRows[$i]); $j++) {
            array_push($row, $arrRows[$i][$j] + $arrRows[$i][$j + 1]);
        }
        array_push($arrRows, $row);
    }
    print_r($arrRows);
}
createPascale();