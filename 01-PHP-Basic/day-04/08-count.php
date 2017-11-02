<?php
    header("Content-type:text/html;charset=utf-8");
    
    $a = 10;
    $b = 20;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;

    echo "<pre>";
    var_dump($c, $d, $e, $f);
    echo "</pre>";

    $g = 20 % 10;
    $h = 10 % 20;
    $i = 10 % -3;
    $j = 10 % 3;
    $k = -10 % 3;
    $l = 9.9 % 3;
    $m = 10 % 3.3;
    
    echo "<pre>";
    var_dump($g, $h, $i, $j, $k, $l, $m);
    echo "</pre>";
?>