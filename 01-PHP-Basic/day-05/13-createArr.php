<?php
    header("Content-type:text/html;charset=utf-8");

    include_once("09-dingyihanshu.php");

    // $arr[][][][] = 10;
    /*$arr["name"] = "曹操";
    $arr["age"] = "18";
    $arr["country"] = "魏国";
    $arr["salary"] = 19999.9;
    $arr["conect"][] = "174397986669";
    $arr["conect"][] = "97968687";*/

    $arr = array(
        "name" => "曹操",
        "age" => 18,
        "country" => "魏国",
        "salary" => 19999.99,
        "conect" => array(
            "174397986669",
            "97968687"
        )
    );

    dump($arr);
?>