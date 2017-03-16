<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $thing) {
// 	if (is_scalar($thing)){
// 		echo $thing . PHP_EOL; 
// 	} 
// 	if (is_null($thing)) {
// 		echo $thing . PHP_EOL;
// 	}
// 	if (is_array($thing)) {
// 		echo "Array "; 
// 		foreach ($thing as $innerThing) {
// 			echo $innerThing . " ";
// 		}
// 		echo PHP_EOL;
// 	}
// }


foreach ($things as $thing) {
    if(is_array($thing)) {
        // print_r($thing);
        // display array like Array (1, 2, 3)
        echo 'Array ( ';
        foreach ($thing as $innerThing) {
            echo $innerThing . " ";
        }
        echo ')', PHP_EOL;
    } else {
        echo $thing, PHP_EOL;
    }
}
?>