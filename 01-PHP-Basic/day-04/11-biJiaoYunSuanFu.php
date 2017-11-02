<?php
    header("Content-type:text/html;charset=utf-8");

    $a = 10;
    $b = "10";

    if($a == $b) {
        echo "\$a和\$b的值相等";
        if($a === $b) {
            echo "\$a和\$b的類型也相等";
        } else {
            echo "\$a和\$b的類型不相等";
        }
    } else {
        echo "\$a和\$b的值不相等";
    }

    echo "<br>";

    // 2.0
    var_dump(20 > true);
    
    echo "<br>";

    // 3.0
    var_dump("bao" > "ao");
?>