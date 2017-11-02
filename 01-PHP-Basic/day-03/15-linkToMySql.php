<?php
    header("Content-type:text/html;charset=utf-8");

    $db_host = "localhost";
    $db_user = "root";
    $db_pwd = "123456";

    $link = mysql_connect($db_host, $db_user, $db_pwd);

    var_dump($link);

    if($link) {
        echo "OK";
    } else {
        echo "KO";
    }
?>