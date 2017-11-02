<?php
    header("Content-type:text/html;charset=utf-8");

    $a = 0;
    while(++$a) {
        while(10) {
            while(true) {
                echo "此條語句執行";
                break 3;
            }
        }
    }
    
    echo "<br>over!";
?>