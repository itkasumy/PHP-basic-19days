<?php
    header("Content-type:text/html;charset=utf-8");
    include_once "00-dump.php";
    
    $arr = array(
        "c" => "10",
        "a" => "30",
        "d" => "70",
        "b" => "40"
    );
    
    // sort($arr);
    // dump($arr);

    // rsort($arr);
    // dump($arr);

    // asort($arr);
    // dump($arr);

    // arsort($arr);
    // dump($arr);

    // ksort($arr);
    // dump($arr);

    krsort($arr);
    dump($arr);
?>