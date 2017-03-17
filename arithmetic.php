<?php

$a = 10;
$b = 2;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	} else {
		echo throwErrorMessage($a, $b);
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a - $b . PHP_EOL;
	} else {
		echo throwErrorMessage($a, $b);
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a * $b . PHP_EOL;
	} else {
		echo throwErrorMessage($a, $b);
	}
}

function divide($a, $b) {
	if ($b === 0){
		return "Cannot divide by 0." . PHP_EOL;
	} else if (is_numeric($a) && is_numeric($b)) {
    	return $a / $b . PHP_EOL;
	} else {
		echo throwErrorMessage($a, $b);
	}	
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a % $b . PHP_EOL;
	} else {
		echo throwErrorMessage($a, $b);
	}
}

function throwErrorMessage($a, $b) {
	return "Both arguments need to be numeric. Values entered were $a and $b ". PHP_EOL;
}

echo add(3, 3);
echo subtract(3, 3);
echo multiply(3, 3);
echo divide(3, 0);
echo modulus("w", 3);
// Add code to test your functions here
