<?php
    header("Content-type:text/html;charset=utf-8");
    $i = 0;
    for(;;) {
        $i++;
        if($i == 11) break;
        echo "{$i} ";
    }

    echo "<br>";

    for($i = 0; $i < 10; $i++) {
        echo "{$i} ";
    }
?>