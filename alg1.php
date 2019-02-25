<?php

function bin_sch($array, $low, $high, $k)
{
    if($low <= $high)
    {
        $mid = intval(($low+$high)/2);
        if($array[$mid] == $k)
        {
            return $mid;
        }elseif($k < $array[$mid])
        {
            return bin_sch($array, $low, $mid-1, $k);
        }else{
            return bin_sch($array, $mid+1, $high, $k);
        }
    }
    return -1;
}

$array={}
echo bin_sch()