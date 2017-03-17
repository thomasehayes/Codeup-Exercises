<?php 
// What is a function?
	// Create reusable blocks of code that you can run later. 
	// Creating and defining behavior
	// organizational tool
// planning functions
	// make small functions
	// that do one thing
	// do it only
	// do it well

//functions have 4 parts
// function
// sayHello
// ()
// { what its doing }


// implement a multiply function without using the * operator in your language
// function multiply($a, $b) {
// 	//add $a to itself $g time (using a loop)
// 	$counter = 1;
// 	$total = 0;
// 	do { 
// 		$total = add($total, $a);
// 		$counter ++;
// 	} while ($counter <= $b);
// 	return $total;
// }
// echo multiply(2,5);


// function add($a, $b) {
// 	return $a + $b;
// }


//PHP can only grab variables inside of the function


//This will show Hi there, Luis
// $name = "Luis";
// function sayHello($name) {
// 	return "Hi there, $name!" . PHP_EOL;
// }
// echo sayHello($name);


// This will get undefine variable because $name is not within sayHello()
// $name =  "Luis";
// function sayHello() {
// 	return "Hi there, $name!" . PHP_EOL;
// }
// echo sayHello($name);


//This will show Hi there, Thomas.
//Even though $input is parameter name for sayHello. If you echo out sayHello($name), it 
//will replace $input with $name. 
$name =  "Luis";
function sayHello($input) {
	return "Hi there, $input!" . PHP_EOL;
}

$name = "Thomas";
echo sayHello($name);




?>