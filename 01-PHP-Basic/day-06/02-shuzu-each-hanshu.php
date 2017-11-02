<?php
    header("Content-type:text/html;charset=utf-8");

    // each — 返回数组中当前的键／值对并将数组指针向前移动一步
    // 语法: array each ( array &$array )
    /*参数 
        array
        输入的数组。*/

    // 返回数组中当前的键／值对并将数组指针向前移动一步 
    // 在执行 each() 之后，数组指针将停留在数组中的下一个单元或者当碰到数组结尾时停留在最后一个单元。如果要再用 each 遍历数组，必须使用 reset()。
    // 返回 array 数组中当前指针位置的键／值对并向前移动数组指针。键值对被返回为四个单元的数组，键名为 key 和 value。单元 0 和 key 包含有数组单元的键名，1 和 value 包含有数据。

    // $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
    $foo = array("Robert" => "Bob", "Seppo" => "Sepi");
    
    $bar = each($foo);

    // $d = each($foo);
    echo("<pre>");
    print_r($bar);
    // print_r($d);
    echo("</pre>");
?>