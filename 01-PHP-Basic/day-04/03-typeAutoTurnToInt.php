<?php
    header("Content-type:text/html;charset=utf-8");
    
    $width = "100px";
    $width *= 2;
    echo $width."px";

    $a = "100px"; // 100
    $a = "abc100"; // 0
    $a = ""; // 0
    $a = true; // 1
    $a = false; // 0
    $a = NULL; // 0
    $a = 100.01; // 100

    $result = (int) $a;

    var_dump($result);
?>