<?php
    header("Content-type:text/html;charset=utf-8");

    include_once("09-dingyihanshu.php");

    /*$arr[] = 10;
    $arr[10] = 100;
    $arr[] = 1000;
    $arr["a"] = "a";
    $arr["b"] = "b";
    $arr[] = 10000;

    dump($arr);*/


    // $arr = array(1, 2, 3, "a", "b", true, false);
    $arr = array(
        "name" => "caocao",
        "gender" => "男",
        "country" => "魏",
        10 => "青青子衿",
        20 => "悠悠我心",
        "周公吐哺",
        "天下归心"
    );
    dump($arr);
?>