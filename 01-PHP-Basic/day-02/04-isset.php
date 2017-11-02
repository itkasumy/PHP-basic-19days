<?php
    header("Content-type:text/html;charset=utf-8");
    
    if(isset($name)) {
        echo "变量可用";
    } else {
        echo "变量不可用";
    }
?>