<?php
/**
 * 反转数组
 * @param  array $arr 
 * @return array
 */
    $testArray = [1,3,5,6,7,9];

    function reverse(Array $arr)
    {
        $count = count($arr);
        $left = 0;
        $right = $count - 1;
        while($left < $right)
        {
            $temp = $arr[$left];
            $arr[$left] = $arr[$right];
            $arr[$right] = $temp;
            $left++;
            $right--;
        }
        return $arr;
    }

    $testArray = reverse($testArray);
    print_r($testArray);
