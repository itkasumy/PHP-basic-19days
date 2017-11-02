<?php
    header("Content-type:text/html;charset=utf-8");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if($_POST["ac"] && $_POST["ac"] == "login") {
        $uName = $_POST["uName"];
        $uPwd = $_POST["uPwd"];
        echo "用户名：$uName<br>密  码：$uPwd";
    } else {
        echo "非法登陆！";
    }
?>