<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";    
   
    // strtotime — 将任何英文文本的日期时间描述解析为 Unix 时间戳
    $str = "1990-10-12 18:00:00";
    echo strtotime($str)."<br>";
    echo date("Y-m-d H:i:s", strtotime($str))."<br>";

    echo strtotime("Fri, 13 Dec 2017 20:45:54 GMT")."<br>";
    echo date("Y-m-d H:i:s", strtotime("Fri, 13 Dec 2017 20:45:54 GMT"));
?>