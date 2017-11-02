<?php
    header("Content-type:text/html;charset=utf-8");

    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0)
            echo "{$i} ";
    }

    echo "<hr>";

    for($i = 1; $i <= 100; $i++) {
        if($i % 2 != 0) continue;
        
        echo "{$i} ";
    }
?>