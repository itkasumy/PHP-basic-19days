<?php
    header("Content-type:text/html;charset=utf-8");

    echo "<pre>";
    print_r($_GET);
    echo "<pre>";

    $uName = $_GET["uName"];
    $uPwd = $_GET["uPwd"];

    echo "用户名: $uName <br>密 码: $uPwd";
?>