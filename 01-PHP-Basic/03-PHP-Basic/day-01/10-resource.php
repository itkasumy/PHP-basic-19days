<?php
    $path = __DIR__;
    $fp = fopen($path.'\a.txt', 'r');
    $data = fgets($fp);
    echo $data;