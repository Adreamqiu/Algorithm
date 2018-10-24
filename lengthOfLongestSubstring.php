<?php
function lengthOfLongestSubstring($string)
{
    $len = strlen($string);
    $map = array();
    $longest = 0;
    for ($i = 0, $j = 0; $i < $len; $i++)
    {
        if (array_key_exists($string[$i], $map))
        {
            $j = max($j, $map[$string[$i]]+1);
        }
        $map[$string[$i]] = $i;
        $longest = max($longest, $i-$j+1);
    }
    return $longest;
}

$string = 'pwwkew';
lengthOfLongestSubstring2($string);
function lengthOfLongestSubstring2($string)
{
    $len = strlen($string);
    $map = array();
    $longest = 0;
    for ($i=0,$j=0; $i<$len; $i++)
    {
        if (array_key_exists($string[$i], $map))
        {
            $j = max($j, $map[$string[$i]]+1);
        }
        $map[$string[$i]] = $i;
        $longest = max($longest, $i+1-$j);
    }
}