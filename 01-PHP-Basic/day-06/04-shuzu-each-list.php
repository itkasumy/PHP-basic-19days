<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";

    // $arr = array("apple", "banana", "mongo", "pear");
    $arr = array(
        "fruit" => "apple",
        "food" => "muddle",
        "animal" => "bird"
    );

    while(list($key, $val) = each($arr)) {
        echo "\$arr[$key] => $val <br>";
    }
?>