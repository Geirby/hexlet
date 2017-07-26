<?php
$data = [
    ['id' => 4, 'age' => 15],
    ['id' => 3, 'age' => 28],
    ['id' => 8, 'age' => 3],
    ['id' => 1, 'age' => 23]
];
function dataSort($sorting, $data)
{
    if (isset($sorting)) {
        if(isset($sorting['sort'])) {
            $result = explode(' ',$sorting['sort']);
            foreach ($data as $key => $row) {
                $arrSort[$key]  = $row[$result[0]];
            }
            array_multisort($arrSort, ($result[1] == 'desc') ? SORT_DESC : SORT_ASC, $data );
        }
    }
    return json_encode($data);
}
//example
//echo dataSort(!empty($_GET) ? $_GET : null , $data);