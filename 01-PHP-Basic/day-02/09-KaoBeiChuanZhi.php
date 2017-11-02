<?php
    header("Content-type:text/html;charset=utf-8");

    $a = 100;
    $b = $a;
    $a = 200;

    echo "\$a=$a; \$b=$b";
?>