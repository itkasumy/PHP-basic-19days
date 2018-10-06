<?php
    // @ 用于屏蔽错误提示
    /*$link = @mysql_connect("127.0.0.1", "root", "root");
    var_dump($link);*/

    ini_set('display_errors', 'off');
    $link = mysql_connect("127.0.0.1", "root", "roo");
    var_dump($link);

    echo '<br />';

    $res = ini_get('display_errors');
    var_dump($res);