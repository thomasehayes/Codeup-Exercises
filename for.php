<?php 

for ($i = 1; $i <= 100 ;$i++) {
	// process: modulus
	if ($i % 3 === 0 && $i % 5 === 0) {
		fwrite(STDOUT, 'FizzBuzz' . PHP_EOL);
	} else if ($i % 5 === 0) {
		fwrite(STDOUT, 'Buzz' . PHP_EOL);
	} else {
		echo $i . PHP_EOL;
	}
}
?>