<?php
    header('Content-type:text/html;charset=utf-8');
    $v1 = 10;
    $v2 = '10';
    $v3 = true;
    $v4 = false;

    // $v5 = [10, 20, 30];
    // $v5 = array(10, 20, 30);

    /*echo $v1, '<br />';
    echo $v2, '<br />';
    echo $v3, '<br />';
    echo $v4, '<br />';*/
    // echo $v5, '<br />';

    // echo PHP_VERSION;

    /*print_r($v1);
    echo '<br />';
    var_dump($v5);*/

    /*$v = 10;
    echo sprintf('八进制:%o<br />', $v);
    echo sprintf('十六进制:%x<br />', $v);
    echo sprintf('二进制:%b<br />', $v);

    $f = -1;
    echo sprintf('二进制:%b<br />', $f);*/

    /*$a = $b = $c = $d = $e = 100;
    echo sprintf('$a的十进制：%d;<br />$b的八进制：%o;<br />$c的二进制：%b;<br />$d的十六进制：%x %.6f', $a, $b, $c, $d, $e);*/

    echo '<br />';
    echo sprintf('%b', ord('中'));
    echo '<br />';
    echo sprintf('%b', ord('陈'));
    echo '<br />';
    echo sprintf('%b', ord('俊'));
    echo '<br />';
    echo sprintf('%b', ord('飞'));