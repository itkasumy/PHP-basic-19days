<?php
    header("Content-type:text/html;charset=utf-8");
    
    $name = "荀彧";
    $country = "魏国";

    // wrong1
    // echo "$name的国籍是$country";
    // wrong2
    // echo '$name 的国籍是$country';
    echo "<br/>";
    // right
    echo "$name 的国籍是$country";
    echo "<br/>";
    echo "{$name}的国籍是$country";

?>