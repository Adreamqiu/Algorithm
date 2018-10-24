<?php
function Find($target, $array)
{

    foreach ($array as $v)
    {
        foreach ($v as $val){
            if($val == $target) {
                return true;
            }
        }
    }
    return false;
}
function Find2($target, $array)
{
    $rowCount = count($array);
    $colCount = count($array[0]);
    for($i=$rowCount-1,$j=0;$i>=0&&$j<$colCount;)
    {
        if($target == $array[$i][$j])
            return $array[$i][$j];
        if($target < $array[$i][$j])
        {
            $i--;
            continue;
        }
        if($target > $array[$i][$j])
        {
            $j++;
            continue;
        }
    }
    return false;
}

$arr = [
    [1,2,3,4],
    [2,4,4,5],
    [3,5,5,6],
];
var_dump(Find2(6, $arr));