<?php
function replaceSpace1($str)
{
    $newStr = str_replace(' ', '%20', $str);
    return $newStr;
}
function replaceSpace2($str)
{
    $i=0;
    $oldNumber=0;     //记录以前的长度
    $replaceNumber=0; //记录空格的数量
    while(isset($str[$i]))
    {
        $oldNumber++;
        if($str[$i]==' ')
        {
            $replaceNumber++;
        }
        $i++;
    }
    $oldNumber--;
    $newNumber=$oldNumber+$replaceNumber*2;
    while($oldNumber>=0 && $newNumber>$oldNumber)
    {
        if($str[$oldNumber]==' ')
        {
            $str[$newNumber--]='0';
            $str[$newNumber--]='2';
            $str[$newNumber--]='%';
        }
        else
        {
            $str[$newNumber--]=$str[$oldNumber];
        }
        $oldNumber--;

    }
    return $str;
}
echo replaceSpace2(' We Are Happy. ');