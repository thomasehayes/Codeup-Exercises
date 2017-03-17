<?php

function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    return $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
	return $a * $b . PHP_EOL;
}

function divide($a, $b)
{
    return $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	return $a % $b . PHP_EOL;
}

echo add(6, 3);
echo subtract(6, 3);
echo multiply(6, 3);
echo divide(6, 3);
echo modulus(5, 3);
// Add code to test your functions here
