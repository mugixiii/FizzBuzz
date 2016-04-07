<?php
	echo "FizzBuzz問題<br />\n";
	echo "<br />\n";

	for ($number = 1; $number <= 100; $number++){
	
		$fizz = $number % 3;
		$buzz = $number % 5;
	
		if ($fizz == 0 && $buzz == 0){
			echo "FizzBuzz<br />\n";
		} elseif ($fizz == 0){
			echo "Fizz<br />\n";
		} elseif ($buzz == 0){
			echo "Buzz<br />\n";
		} else {
			echo $number . "<br />\n";
		}
	}

?>