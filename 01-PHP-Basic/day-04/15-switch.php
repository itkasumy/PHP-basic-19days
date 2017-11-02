<?php
    header("Content-type:text/html;charset=utf-8");

    $week = date("N");
    $str = "星期";

    switch($week) {
        case 1:
            $str .= "一";
            break;
        case 2:
            $str .= "二";
            break;
        case 3:
            $str .= "三";
            break;
        case 4:
            $str .= "四";
            break;
        case 5:
            $str .= "五";
            break;
        case 6:
            $str .= "六";
            break;
        default:
            $str .= "日";
    }

    echo "今天是$str";
?>