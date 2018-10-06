<?php
    $v1 = 100;
    $v2 = '100a';
    $v3 = 'a100';

    $res = 100 + $v3;

    echo $res;

    $b = (int)$v3;
    echo $b;