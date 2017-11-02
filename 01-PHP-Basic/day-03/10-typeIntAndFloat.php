<?php
    $a = 90;
    $b = 077;
    $c = 0xac47;

    // 所有的输出都是以10进制的形式输出显示
    var_dump($a, $b, $c);

    echo "<br>";

    var_dump((pow(2, 31) - 2));

    echo "<br>";

    var_dump(pow(2, 31));
    
    echo "<br>";

    $d = 0.98;
    $e = -0.98;
    var_dump($d, $e);
?>