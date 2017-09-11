<?php
    //寻找最小的k个数
//题目描述
//输入n个整数，输出其中最小的k个。
//思路：先获取数组中最小的数，然后从数组中去掉这个数，剩余的数组再获取最小的数，遍历。
/**
 * 获取最小的k个数
 * @param  array $arr 
 * @param  int $k   [description]
 * @return array
 */

 function find_min_array(Array $arr, $k)
 {
    $count = count($arr);
    $min_array = [];
    if($count <= $k)
        return $arr;
    for($i = 0; $i < $k; $i++)
    {
        $res = min($arr);
        $min_array[] = $res;
        $key = array_search($res, $arr);
        unset($arr[$key]);
    }
    return $min_array;
 }

$array = [1, 100, 20, 22, 33, 44, 55, 66, 23, 79, 18, 20, 11, 9, 129, 399, 145, 2469, 58];

$min_array = find_min_array($array, 10);

print_r($min_array);