<?php
    header("Content-type:text/html;charset=utf-8");
    
    
    /*list — 把数组中的值赋给一些变量 
        说明 
            array list ( mixed $varname [, mixed $... ] )
                像 array() 一样，这不是真正的函数，而是语言结构。list() 用一步操作给一组变量进行赋值。
        参数 
            varname 一个变量。 
        返回值 
            返回指定的数组。 */

    $info = array('coffee', 'brown', 'caffeine');
    // 列出所有变量
    // list($drink, $color, $power) = $info;
    // echo "$drink is $color and $power makes it special.\n";

    // 列出他们的其中一个
    // list($drink, , $power) = $info;
    // echo "$drink has $power.\n";

    // 或者让我们跳到仅第三个
    // list( , , $power) = $info;
    // echo "I need $power!\n";

    // list() 不能对字符串起作用
    // list($bar) = "abcde";
    // var_dump($bar); // NULL


    // list($a, list($b, $c)) = array(1, array(2, 3));
    // var_dump($a, $b, $c);



    $info = array('coffee', 'brown', 'caffeine');

    list($a[0], $a[1], $a[2]) = $info;
    echo "<pre>";
    var_dump($a);
    echo "</pre>";



    /*$fruit = array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry');
    reset($fruit);
    while (list($key, $val) = each($fruit)) {
        echo "$key => $val <br>";
    }*/
?>