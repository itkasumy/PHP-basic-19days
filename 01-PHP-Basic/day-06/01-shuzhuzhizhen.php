<?php
    header("Content-type:text/html;charset=utf-8");

    /*$arr = array(
        "db_host" => "localhost",
        "db_user" => "root",
        "db_pwd" => "root",
        "db_name" => "ksm",
        "charset" => "utf8"
    );*/

    /*foreach语法:
    foreach($arr as $val) {...}
    foreach($arr as $key => $val) {...}*/

    /*foreach($arr as $key => $val) {
        echo $key." = ".$val."<br>";
    }*/

    /*数组指针的相关函数:
    current(): 返回当前数组指针处元素的值，不移动指针
    key(): 返回当前数组指针处元素的下标，不移动指针
    next(): 返回下一个数组元素的值，并将指针下移一行
    prev(): 返回上一个数组元素的值，并将指针回退一步
    end(): 返回最后一个数组元素的值，并将指针移动到数组最后一个元素
    reset(): 返回第一个数组元素的值，并将指针移到第一个元素上*/

    /*echo "当前指针所处元素的下标：".key($arr)." ,值为: ".current($arr);
    next($arr);
    next($arr);
    echo "<br>当前指针所处元素的下标：".key($arr)." ,值为: ".current($arr);
    prev($arr);
    echo "<br>当前指针所处元素的下标：".key($arr)." ,值为: ".current($arr);
    end($arr);
    echo "<br>当前指针所处元素的下标：".key($arr)." ,值为: ".current($arr);
    reset($arr);
    echo "<br>当前指针所处元素的下标：".key($arr)." ,值为: ".current($arr);*/

    /*$arr = array(1, 2, 3, 4, 5, 6);
    $sum = 0;
    foreach($arr as $val) {
        $sum += $val;
    }
    echo "和为：$sum";*/

    $arr = array(
        array(1, 2, 3, 4, 5),
        array(1, 2, 3, 4),
        array(1, 2, 3),
        array(1, 2),
        array(1)
    );
    $sum = 0;
    $tm = 0;
    foreach($arr as $ary) {
        foreach($ary as $val) {
            $sum += $val;
            $tm++;
        }
    }
    echo("平均值为:".round($sum/$tm, 2));
?>