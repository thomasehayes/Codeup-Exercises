<?php 
//break continue Exercise and Notes


$random = mt_rand(1, 100);

for ($i = 1; $i <= 100; $i++) {
	if($i % 2 !== 0) {
		continue;;
	}
	echo $i, PHP_EOL;
}













//===========================
// NOTES
//===========================
//create a game.
//Should show a sequence of number, it should stop at a random value.
//your player is going to guess when a sequence of numbers is going to stop.

// $random = mt_rand(1, 100);

// for ($i = 1; $i <= 100; $i++) {
// 	if($i === $random) {
// 		break;
// 	}
// 	echo $i, PHP_EOL;
// }


// changing the for loop into a while loop
// $i = 1;
// while ($i <= 100) {
// 	if ($i=== $random) {
// 		break;
// 	}
// 	echo $i, PHP_EOL;
// 	$i++;
// }

//using a foreach loop
// foreach(range(1,100) as $i) {
// 	if ($i === $random) {
// 		break;
// 	}
// 	echo $i, PHP_EOL;
// }

//Show all the products with a price of less than 100 dollars
// $prices = [ 56,48, 78,12, 52, 120, 99, 71, 90];

// foreach($prices as $price) {
// 	if ($price < 100) {
// 	echo "$".$price, PHP_EOL;
// 	}
// }

// Using continue will show you the values before 100 because it is telling you to look past anything that is 100. so its like asking you to do the opposite in the if condition. 
// foreach($prices as $price) {
// 	if ($price >= 100) {
// 		continue;
// 	}
// 	echo "$".$price, PHP_EOL;
// }

?>