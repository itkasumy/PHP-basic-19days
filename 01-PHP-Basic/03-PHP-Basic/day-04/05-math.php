<?php
    $v1 = 100;
    $v2 = 200;
    $v3 = 300;

    echo max($v1, $v2, $v3), '<br />';
    echo min($v1, $v2, $v3), '<hr />';

    $v4 = 3.3;
    $v5 = 3.8;
    echo floor($v5), '<hr />';
    echo ceil($v4), '<hr />';
    echo round($v4), '<hr />';

    echo rand(1, 100), '<hr />';
    echo mt_rand(1, 100), '<hr />';

    echo pow(2, 32), '<hr />';
    echo sqrt(64), '<hr />';
