<?php
    header("Content-type:text/html;charset=utf-8");
    
    $a = 100; // true
    $a = 0; // false
    $a = 0.98; // true
    $a = ""; // false
    $a = "100px"; // true
    $a = "0"; // false
    $a = "abc"; // true
    $a = NULL; // false
    $a = array(); // false

    $result = (bool) $a;

    var_dump($result);
?>