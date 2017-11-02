<?php
    header("Content-type:text/html;charset=utf-8");

    $a = 10;
    $b = 20;
    $c = 15;
    echo $a > $b ? $a > $c ? $a : $c : $b > $c ? $b : $c;

    // 錯誤屏蔽符：@
    echo @$a;
    echo @DB_HOST;
    $link = @mysql_connect("localhost", "root", "123456");
?>