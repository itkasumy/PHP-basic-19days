<?php
    header("Content-type:text/html;charset=utf-8");
    
    $a = "100px";
    $intA = (int) $a;
    $boolA = (bool) $a;
    $arrayA = (array) $a;

    var_dump($intA, $boolA, $arrayA);
?>