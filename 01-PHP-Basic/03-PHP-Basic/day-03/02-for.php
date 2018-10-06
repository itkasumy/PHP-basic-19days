<?php
    $strTab = "<table border='1' style='width: 200px; height: 200px'>";

    for($k = 0; $k < 10; $k++) {
        $strTab .= '<tr>';
        for($i=0;$i<10;$i++){
			$strTab .= "<td></td>";
		}
		$strTab .="</tr>";
    }

    $strTab .= "</table>";

    echo $strTab;