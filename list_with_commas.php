 <?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 	// $finalArray = array_pop($array);
 	// $final = array_push($array, "and ") . implode(",", $array);
 	// return $final;
 	$output = "";
 	$lastValue = array_pop($array);
 	$output = implode("," , $array);
 	$output .= ", and $lastValue";
 	
 	return $output;
 }

// Humanize list with sorting option
 function humanizedListSort($array, $sortName = false) {
 	if ($sortName == true) {
 		sort($array);
 	}

 	$output = "";
 	$lastValue = array_pop($array);
 	$output = implode("," , $array);
 	$output .= ", and $lastValue";
 	
 	return $output;
 }

function humanizedFirstName($array, $sortName = false) {

	$output = "";
	//Eliminate last names

	$names = implode(" ", $array);
	$namesArray = explode(" ", $names);
	$firstNamesArray = [];
	for($i = 0; $i <count($namesArray); $i +=2){
		array_push($firstNamesArray, $namesArray[$i]);
	}

	if ($sortName == true) {
		sort($firstNamesArray);
	}

	$lastValue = array_pop($firstNamesArray);
	$output = implode(",", $firstNamesArray);
	$output .= ", and $lastValue";

	return $output;
}







 // List of famous peeps
 $physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(",", $physicistsString);
 // print_r($physicistsArray);

 // Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);
$famousFakePhysicists = humanizedListSort($physicistsArray);
$famousFakePhysicists = humanizedFirstName($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 ?>