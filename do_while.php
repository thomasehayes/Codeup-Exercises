<?php 
$test = 100;

do {
	echo $test . PHP_EOL;
	$test -=5;
} while ($test >=-10);


$a = 2;

do {
	echo $a . PHP_EOL;
	$a *=$a;
} while ($a < 1000000);
?>