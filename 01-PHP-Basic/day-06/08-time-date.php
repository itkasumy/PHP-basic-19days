<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";
    
    echo "当前时间戳：".time();

    echo "<br>".date("Y-m-d H:i:s")."<br>";
    echo date("Y年m月d日 H:i:s")."<br>";
    // 计算一周之后的日期
    echo date("Y-m-d H:i:s", time() + 3600 * 24 * 7);
?>