<?php
/**
 * 计算字符串中每个字符出现次数
 * @param  array $arr 
 * @return array
 */
    $str = 'aaabbcddeffff';

    function countString($string)
    {
        if(!is_string($string)){
            echo 'input error', PHP_EOL;
            return;
        }
        echo $string;
        // $str_array = explode('', $string);
        $str_array = str_split($string, 1);
        $count = [];
        $keys = array_keys($count);
        foreach ($str_array as $v)
        {
            if(!in_array($v, $keys))
            {
                $count[$v] = 1;
                $keys[] = $v;
            }
            else
            {
                $count[$v]++;
            }
        }
        print_r($count);
    }

    countString($str);
