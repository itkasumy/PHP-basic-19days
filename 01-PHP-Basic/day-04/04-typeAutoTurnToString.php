<?php
    header("Content-type:text/html;charset=utf-8");
    
    $a = 100; // "100"
    $a = 0; // "0"
    $a = -0.98; // "-0.98"
    $a = true; // "1"
    $a = false; // ""
    $a = NULL; // ""

    $result = (string) $a;

    var_dump($result);

    echo "<hr>";
    
    echo "100".true;
?>