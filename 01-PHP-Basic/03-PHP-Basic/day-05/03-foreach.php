<?php
    $arr = array(
        "name" => "zhangsan",
        "age" => 18,
        "gender" => "male"
    );

    foreach($arr as $k => $v) {
        echo $k, " => ", $v ,'<hr />';
    }