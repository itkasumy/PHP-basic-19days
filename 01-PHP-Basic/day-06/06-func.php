<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";
    
    // 引用传参
    function showInfo(&$name, &$age) {
        $name = "kasumy";

        echo "{$name}的年龄是{$age}";
    }

    $name = "ksm";
    $age = 18;

    showInfo($name, $age);
    echo "<br>$name";
?>