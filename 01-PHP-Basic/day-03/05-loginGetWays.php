<?php
    header("Content-type:text/html;charset=utf-8");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    if(!empty($_GET)) {
        $uName = $_GET["uName"];
        $uPwd = $_GET["uPwd"];
        echo "用户名:$uName <br>密 码:$uPwd";
    }
?>

<br>
<a href="?uName=chenjunfei@itcast.cn&uPwd=123456">递交</a>
<br>
<button onclick="location.href='?uName=chenjunfei@itcast.cn&uPwd=123456'">提交</button>