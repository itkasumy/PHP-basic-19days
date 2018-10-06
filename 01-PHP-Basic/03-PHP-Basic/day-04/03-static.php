<?php
    /*function showInfo() {
        $n = 1;
        $n++;
        echo $n;
    }

    showInfo();
    showInfo();
    showInfo();*/

    function showInfo() {
        static $n = 1;
        $n++;
        echo $n, '<br />';
    }

    function other() {
        static $n = 100;
        $n++;
        echo $n, '<br />';
    }

    showInfo();
    other();
    showInfo();
    other();
    showInfo();