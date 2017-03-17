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
	if ($b === 0){
		echo "Cannot divide by 0." . PHP_EOL;
		echo "Value inputed for division: " . $a . PHP_EOL;
		echo "Value inputed for division: " . $b . PHP_EOL;
	} else if (is_numeric($a) && is_numeric($b)) {
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
echo divide(3, 0);
echo modulus(3, 3);
// Add code to test your functions here
