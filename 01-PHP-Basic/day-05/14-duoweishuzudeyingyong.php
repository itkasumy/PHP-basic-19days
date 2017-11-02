<?php
    header("Content-type:text/html;charset=utf-8");

    include_once("09-dingyihanshu.php");

    $arr = array(
        array("10000", "张三", "18", "male", "大专"),
        array("10001", "李四", "24", "female", "研究生"),
        array("10002", "王五", "23", "male", "本科"),
        array("10003", "赵六", "19", "female", "大专")
    );
    
    $str = "<table border='1'>\n";
    for($i = 0; $i < count($arr); $i++) {
        $str .= "<tr>\n";
        for($j = 0; $j < count($arr[$i]); $j++) {
            $str .= "<td>".$arr[$i][$j]."</td>";
        }        
        $str .= "</tr>\n";
    }    
    $str .= "</table>";

    echo $str;
?>