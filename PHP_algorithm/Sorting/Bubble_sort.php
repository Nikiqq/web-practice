<?php

    //сортировка пузырьком (Bubble sort)

    function sorting($arr) {
        for($i = 0; $i < count($arr); $i++) {
            $flag = true;
            for($j = 0; $j < count($arr) - ($i + 1); $j++) {
                if($arr[$j] < $arr[$j + 1]) {
                    $flag = false;
                    $dummy = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $dummy;
                }
            }
            if($flag) {
                break;
            }
        }
        return $arr;
    }

    $arr = array();
    $n = 1000;
    for($i = 0; $i < $n; $i++) {
        $arr[] = rand ( -100 , 100 );
    }

    echo "<p>";
    foreach($arr as  $i => $value) {
        echo "{$value} ";
    }
    echo "</p>";

    $start = microtime(true);
    $sortArr = sorting($arr);
    $finish = microtime(true);
    $delta = $finish - $start;

    echo $delta . ' сек.';

    echo "<p>";
    foreach($sortArr as  $i => $value) {
        echo "{$value} ";
    }
    echo "</p>";

?>