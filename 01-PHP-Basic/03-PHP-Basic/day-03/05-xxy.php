<?php
    $str = '<table border="1" rules="all">';
    for($i = 1; $i < 10; $i++) {
        $str .= '<tr>';
        for($k = 1; $k <= $i; $k++) {
            if($i * $k <= 30) {
                $str .= "<td>$k * $i = ". $i * $k ."</td>";
            } else {
                break;
            }
        }
        $str .= '</tr>';
    }

    $str .= '</table>';
    echo $str;