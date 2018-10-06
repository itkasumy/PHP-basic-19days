<?php
    $i = 100;
    // define('PI', 3);
    // const P = 3.14;
    // function fn() {
    //     // define('PI', 3);
    //     // echo PI;
    //     // echo $i;
    //     // const H = 100;
    //     echo P;
    // }
    // echo PI;
    // fn();
    // echo PI;

    /*echo '<pre>';
    var_dump($GLOBALS);*/

   /* function showInfo() {
        echo $i;
        echo '<hr />';
        echo $GLOBALS['i'];
    }
    showInfo();*/

    function showInfo() {
        global $a;
        $a = 300;
    }
    showInfo();

    echo $a;