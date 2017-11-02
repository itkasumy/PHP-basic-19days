<?php
    header("Content-type:text/html;charset=utf-8");

    function showInfo() {
        $str = "当前行号：".__LINE__;
        $str .= "<br>当前文件名：".__FILE__;
        $str .= "<br>当前目录：".__DIR__;
        $str .= "<br>当前函数名：".__FUNCTION__;

        echo $str;
    }

    showInfo();
?>