<?php
    header("Content-type:text/html;charset=utf-8");

    $str = "";
    $str .= "服务器IP地址：".$_SERVER["SERVER_ADDR"];
    $str .= "<br>服务器域名：".$_SERVER["SERVER_NAME"];
    $str .= "<br>文档根目录：".$_SERVER["DOCUMENT_ROOT"];
    $str .= "<br>远程IP地址：".$_SERVER["REMOTE_ADDR"];
    $str .= "<br>脚本绝对路径：".$_SERVER["SCRIPT_FILENAME"];
    $str .= "<br>查询字符串：".$_SERVER["QUERY_STRING"];

    echo $str;

    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
?> 