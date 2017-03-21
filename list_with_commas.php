 <?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 	$finalArray = array_pop($array);
 	$final = array_push($array, "and ") . implode(",", $array);
 	return $final;

 }


 // List of famous peeps
 $physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(",", $physicistsString);
 print_r($physicistsArray);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 ?>