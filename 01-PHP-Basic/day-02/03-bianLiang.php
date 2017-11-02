<?php
    header("Content-type:text/html;charset=utf-8");

    $name = "张三丰";
    $sex = "男";
    $age = 24;
    $edu = "大专";
    $salary = 2000;
    $bonus = 500;

    $a = 100;
    $b = "abc";
    $c = $a . $b; // "100abc"

    $str = "";
    $str .= "<h2>{$name}的基本信息如下</h2>";
    $str .= "姓名: $name";
    $str .= "<br>性别: $sex";
    $str .= "<br>年龄: $age";
    $str .= "<br>学历: $edu";
    $str .= "<br>工资: " . ($salary + $bonus);

    echo $str;
?>