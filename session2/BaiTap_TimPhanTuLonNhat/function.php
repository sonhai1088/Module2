<?php
function minimum($arr)
{
    $max = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
$arr = [[3, 4, 5], [6, 7, 8]];
echo minimum($arr);


