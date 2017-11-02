<?php
    header("Content-type:text/html;charset=utf-8");

    include_once("09-dingyihanshu.php");
    
    $arr = array(10, 20, 30, 40, 50);

    echo "数组的长度是：".count($arr);

    unset($arr[3]);

    echo "<br>数组的长度是：".count($arr);

    $arr[] = 60;

    echo "<br>数组的长度是：".count($arr);

    unset($arr);

    echo "<br>数组的长度是：".count($arr);

    $arr[] = 80;

    echo "<br>数组的长度是：".count($arr);

    dump($arr);
?>