<?php
    header("Content-type:text/html;charset=utf-8");

    include_once("09-dingyihanshu.php");

    $arr = array(1, 2, 3, 4, 5);

    $len = count($arr);
    $sum = 0;

    /*for($i = 0; $i < $len; $i++) {
        $sum += $arr[$i];
    }*/

    /*$max = $arr[0];
    for($i = 0; $i < $len; $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }*/

    // echo "平均值为：".$sum / $len;
    // echo "<br>最大值为：".$max;

    dump($arr);
    
    $max = $arr[0];
    $maxIdx = 0;
    $min = $arr[0];
    $minIdx = 0;
    for($i = 0; $i < $len; $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
            $maxIdx = $i;
        }
        if($arr[$i] < $min) {
            $min = $arr[$i];
            $minIdx = $i;
        }
    }
    $arr[$minIdx] = $max;
    $arr[$maxIdx] = $min;

    dump($arr);
?>