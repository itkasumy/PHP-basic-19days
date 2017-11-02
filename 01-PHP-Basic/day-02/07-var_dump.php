<?php
    header("Context-type:text/html;charset=utf-8");

    $arr = array(1, "abc", array(true, 2));

    var_dump($arr);

    echo "<br>";

    $f = 3.14;
    $b = false;

    var_dump($f, $b);
?>