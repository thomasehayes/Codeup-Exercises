<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$nameSearch = 'Tina';

// $resultTina = array_search('Tina', $names, true);
// var_dump($resultTina);

// $resultBob = array_search('Bob', $names, true);
// var_dump($resultBob);


//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function search($name, $array) {
	$result = array_search($name, $array);
	if($result !== false) {
		return "True" . PHP_EOL;
	} else {
		return "False" . PHP_EOL;
	}
}

echo search($nameSearch, $names);

// $result = array_intersect($names, $compare);
// print_r($result);


// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search()


?>