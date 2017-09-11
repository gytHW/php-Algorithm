<?php
    $arr = [8,1,6,3,4,2,9];
    print_r($arr);
    echo "\n\n";

    $arr = bubbleSort($arr);
    print_r($arr);

    function bubbleSort($a)
    {
        $c = count($a);
        for($i = 0; $i < $c; $i++)
        {
            for($j = $i+1; $j < $c; $j++)
            {
                if($a[$i] > $a[$j])
                {
                    // swap($a[$i], $a[$j]);
                    $temp = $a[$j];
                    $a[$j] = $a[$i];
                    $a[$i] = $temp;
                }
            }
        }
        return $a;
    }

    function swap($a, $b)
    {
        $temp = $b;
        $b = $a;
        $a = $temp;
    }

