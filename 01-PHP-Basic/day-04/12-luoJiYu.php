<?php
    header("Content-type:text/html;charset=utf-8");

    $age = $_GET["age"];

    if($age >= 18 && $age <= 25) {
        echo "你可以當兵";
    } else {
        echo "你年齡不符合當兵要求";
    }

    if(!NULL) {
        echo "OK";
    } else {
        echo "NO";
    }
?>