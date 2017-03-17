<?php

$a = 10;
$b = 2;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	} else {
		echo "Both arguments need to be numeric". PHP_EOL;
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a - $b . PHP_EOL;
	} else {
		echo "Both arguments need to be numeric.". PHP_EOL;
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a * $b . PHP_EOL;
	} else {
		echo "Both arguments need to be numeric.". PHP_EOL;
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a / $b . PHP_EOL;
	} else {
		echo "Both arguments need to be numeric". PHP_EOL;
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a % $b . PHP_EOL;
	} else {
		echo "Both arguments need to be numeric". PHP_EOL;
	}
}

echo add(3, 3);
echo subtract(3, 3);
echo multiply(3, 3);
echo divide(3, 3);
echo modulus(3, 3);
// Add code to test your functions here
