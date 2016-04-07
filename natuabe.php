<?php
	$number = array();

	echo "ナツアベ問題<br />\n";
	echo "<br />\n";

	for ($number = 1; $number <= 100; $number++){
	
		if ($number % 3 == 0){
			echo "Aho<br />\n";
		} elseif (strpos($number, '3') !== false){
			echo "Aho<br />\n";
		} else {
			echo $number . "<br />\n";
		}
	}

?>