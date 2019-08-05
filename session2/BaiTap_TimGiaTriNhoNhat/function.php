<?php
function minimum($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $index = $i;
        }
    }
    return $index;
}

$arr = [3, 4, 5, 3, 6, 1, 6];
//    minimum($arr);
echo minimum($arr);


