<?php 
// calculator with the common arithemetic operations + - * /
echo "a) Add". PHP_EOL;
echo "b) Subtract". PHP_EOL;
echo "c) Multiply". PHP_EOL;
echo "d) Divide". PHP_EOL;
echo "q) Quit". PHP_EOL;
echo "Enter an option (a, b, c, d, q)". PHP_EOL;
$option = trim(fgets(STDIN));

if ($option == 'a') {
	//add
}
if ($option == 'b') {
	//subtract
}
if ($option == 'c') {
	//multiply
}
if ($option == 'd') {
	//divide
}
if ($option == 'q') {
	//quit
}

// if you are comparing the same variable with different values, use a switch statement

switch ($option) {
	case 'a':
		echo 'Enter the first number'. PHP_EOL;
		$a = trim(fgets(STDIN));
		echo 'Enter the second number'. PHP_EOL;
		$b = trim(fgets(STDIN));
		echo "The result is " . ($a + $b). PHP_EOL;
		break;
	case 'b':
		echo 'Enter the first number'. PHP_EOL;
		$a = trim(fgets(STDIN));
		echo 'Enter the second number'. PHP_EOL;
		$b = trim(fgets(STDIN));
		echo "The result is " . ($a - $b). PHP_EOL;
		break;
	case 'c':
		echo 'Enter the first number'. PHP_EOL;
		$a = trim(fgets(STDIN));
		echo 'Enter the second number'. PHP_EOL;
		$b = trim(fgets(STDIN));
		echo "The result is " . ($a * $b). PHP_EOL;
		break;
	case 'd':
		echo 'Enter the first number'. PHP_EOL;
		$a = trim(fgets(STDIN));
		echo 'Enter the second number'. PHP_EOL;
		$b = trim(fgets(STDIN));
		echo "The result is " . ($a / $b). PHP_EOL;
		break;
	default:
		echo 'Bye!'. PHP_EOL;

}
?>