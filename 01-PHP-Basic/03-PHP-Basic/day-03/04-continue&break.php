<?php
    for($j=1;$j<3;$j++){
		for($i=1;$i<10;$i++){
			if ($i%3==0) {
				break 2;
			}
			echo $i,'<br/>';
		}
    }
	echo '<hr/>';