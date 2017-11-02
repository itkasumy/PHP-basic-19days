<?php
    header("Content-type:text/html;charset=utf-8");

    define("ID", "7834876316873216");

    if(defined("ID")) {
        echo "ID: ".ID;
    } else {
        echo "不存在ID常量";
    }

    // 常用的系统常量(预定义常量)
    $str = "";
    $str .= "<br>PHP版本号：".PHP_VERSION;
    $str .= "<br>PHP操作系统：".PHP_OS;
    $str .= "<br>PHP最大整数：".PHP_INT_MAX;

    echo $str;
    
    $arr = get_defined_constants(true);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>