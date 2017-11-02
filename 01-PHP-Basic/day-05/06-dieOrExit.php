<?php
header("Content-type:text/html;charset=utf-8");

$db_host = "localhost";
$db_user = "root";
$db_pwd = "123456";

$link = @mysql_connect($db_host, $db_user, $db_pwd);
if(!$link) {
    exit("PHP鏈接MySQL失敗！<br>");
}
echo "100條新聞内容已經取回！";
?>