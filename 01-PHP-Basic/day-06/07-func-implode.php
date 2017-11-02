<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";
    
    $arr = array(10, 20, 30, 40);
    echo implode($arr)."<br>";
    echo implode($arr, "-")."<br>";
    echo implode("-", $arr)."<br>";

    $str = "10001,曹操,男,24,博士,30000,200,亳州";
    $ary = explode(",", $str);
    dump($ary);
?>