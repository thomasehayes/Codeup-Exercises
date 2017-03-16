<?php 
// Exercise: Using the following associative array, produce a script that does the following:
// 	- Outputs only the states with an "x" character in the state name
// 	- Outputs all the states without the letter "a" in their name
// 	- Outputs the states and abbreviations of all the states starting with vowels.

// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array

// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

$states = [
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'PR' => 'Puerto Rico',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'VI' => 'US Virgin Islands',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming'
  ];

echo "--------------------------------------------------". PHP_EOL;
echo "These are states with the letter 'x' in it:" . PHP_EOL;
echo "--------------------------------------------------". PHP_EOL;
foreach ($states as $state => $stateName) {
	if (strstr($stateName, 'x')){
		echo $stateName . PHP_EOL;
	}
}

echo "--------------------------------------------------". PHP_EOL;
echo "These are states that do not have the letter 'a' within it:" . PHP_EOL;
echo "--------------------------------------------------". PHP_EOL;
foreach ($states as $state => $stateName) {
	if (!strstr($stateName, 'a')){
		echo $stateName . PHP_EOL;
	}
}

echo "--------------------------------------------------". PHP_EOL;
echo "These are states starting with vowels:" . PHP_EOL;
echo "--------------------------------------------------". PHP_EOL;
foreach ($states as $state => $stateName) {
	$firstLetter = substr($stateName, 0, 1);
	if ($firstLetter === 'A' || $firstLetter === 'E' || $firstLetter === 'I' || $firstLetter === 'O' ||$firstLetter === 'U'){
		echo $state . "\t $stateName" . PHP_EOL;
	}
}

echo "--------------------------------------------------". PHP_EOL;
echo "These are states starting and ending with vowels:" . PHP_EOL;
echo "--------------------------------------------------". PHP_EOL;
$statesStartingAndEndingWithVowels = [];
foreach ($states as $state => $stateName) {
	$firstLetter = substr($stateName, 0, 1);
	$lastLetter = substr($stateName, -1, 1);
	if (($firstLetter === 'A' || $firstLetter === 'E' || $firstLetter === 'I' || $firstLetter === 'O' ||$firstLetter === 'U' || $firstLetter === 'Y') && ($lastLetter === 'a' || $lastLetter === 'e' || $lastLetter === 'i' || $lastLetter === 'o' ||$lastLetter === ' u' || $lastLetter === 'y')){
		$statesStartingAndEndingWithVowels[$state] = $stateName;
	}
}

foreach($statesStartingAndEndingWithVowels as $state => $stateName) {
	echo $state . "\t $stateName" . PHP_EOL;  
}

echo "--------------------------------------------------". PHP_EOL;
echo "These are the states with more than one word in their name:" . PHP_EOL;
echo "--------------------------------------------------". PHP_EOL;
$statesWithMoreThanOneWordNames =[];
foreach ($states as $state => $stateName) {
	if(strstr($stateName, ' ')) {
		$statesWithMoreThanOneWordNames[$state] = $stateName;
	}
}

foreach ($statesWithMoreThanOneWordNames as $state => $stateName) {
	echo $state . "\t $stateName" . PHP_EOL; 
}

?>