<?php

$a = 10;
$b = 2;
// instead of the all the if else, create a new function

//function argsAreNumeric($a,$b) {
	//if(is_numeric($a) && is_numeric($b)){
	//return true;
	//} else {
		//return false;
	//}
//}
// function add($a, $b) {
// 	if (argsAreNumeric($a, $b)) {
// 		return $a + $b;
// 	} else {
// 		return throwErrorMessage($a, $b);
// 	}
// }


function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a - $b . PHP_EOL;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a * $b . PHP_EOL;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function divide($a, $b) {
	if ($b === 0){
		return "Cannot divide by 0." . PHP_EOL;
	} else if (is_numeric($a) && is_numeric($b)) {
    	return $a / $b . PHP_EOL;
	} else {
		return throwErrorMessage($a, $b);
	}	
}

function modulus($a, $b) {
	if ($b === 0){
		return "Cannot divide by 0." . PHP_EOL;
	} else if (is_numeric($a) && is_numeric($b)){
    	return $a % $b . PHP_EOL;
    } else {
		return throwErrorMessage($a, $b);
    }
	
}

function throwErrorMessage($a, $b) {
	return "Both arguments need to be numeric. Values entered were $a and $b ". PHP_EOL;
}

echo add(3, 3);
echo subtract(3, 3);
echo multiply(3, 3);
echo divide(3, 0);
echo modulus("w", 0);
// Add code to test your functions here
