<?php
    // function nxn() {
    //     echo __FUNCTION__;
    // }

    // nxn();
    // $fn = 'nxn';
    // $fn();

    /*function sum($p1, $p2 = 200) {
        return $p1 + $p2;
    }

    $v1 = 10;
    $v2 = 20;
    echo sum($v1);*/

    /*function sum(&$p1) {
        $p1 += 100;
    }

    $v1 = 10;

    sum($v1);

    echo $v1;*/


    /*function sum() {
        echo func_num_args(); // 获取传递进来的参数的总数
        echo '<br /><pre>';
        print_r(func_get_args()); // 获取传递进来的所有参数，返回的是一个数组
        echo '<br />';
        echo func_get_arg(2); // 获取传递进来的第n个参数
    }

    echo sum(10, 20, 30);*/

    function sum() {
        $arr = func_get_args();
        $sum = 0;
        for($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i];
        }
        return $sum;
    }

    echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    print_r(function_exists('sum'));