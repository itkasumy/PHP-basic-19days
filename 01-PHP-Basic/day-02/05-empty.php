<?php
    header("Content-type:text/html;charset=utf-8");

    if(empty($name)) {
        echo "变量为空";
    } else {
        echo "变量不为空";
    }
?>