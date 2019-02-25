<?php

    //сортировка выбором (Selection sort)

    function sorting($arr) {
        for($i = 0; $i < count($arr) - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < count($arr); $j++) {
                if($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            
            $dummy = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $dummy;
        }
        return $arr;
    }

    $arr = array();
    $n = 20;
    for($i = 0; $i < $n; $i++) {
        $arr[] = rand ( -100 , 100 );
    }

    echo "<p>";
    foreach($arr as  $i => $value) {
        echo "{$value} ";
    }
    echo "</p>";
    
    $sortArr = sorting($arr);

    echo "<p>";
    foreach($sortArr as  $i => $value) {
        echo "{$value} ";
    }
    echo "</p>";

?>