<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1, $array2) {
	$arrayResult = [];

	foreach ($array1 as $key => $name){
		if($name== $array2[$key]) {
			array_push($arrayResult, $name);
		} else {
			array_push($arrayResult, $name);

			array_push($arrayResult, $array2[$key]);
			}
		}
		return $arrayResult;
	}

print_r(combine_arrays($names, $compare)). PHP_EOL;


?>
