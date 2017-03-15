<?php 

do {
	fwrite(STDOUT, 'Enter numeric start value: ');
	$start = trim(fgets(STDIN));
} while (!is_numeric($start));

do {
	fwrite(STDOUT, 'Enter numeric end value: ');
	$end = trim(fgets(STDIN));
} while (!is_numeric($end));

fwrite(STDOUT, 'Enter numeric incremental value: ');
$countBy = trim(fgets(STDIN));

if (empty($countBy) || !is_numeric($countBy)){
	$countBy = 1;
}

// if ending is less than start, swap values
if ($end < $start) {
	$oldEnd = $start;
	$oldStart = $end;
	$start = $oldStart;
	$end = $oldEnd;
}

// if incrementer is negative, then change it to a positive w/ absolute value
if ($countBy < 0) {
	$countBy = abs($countBy);
}

for ($i = $start; $i <= $end ;$i += $countBy) {
	echo $i . PHP_EOL;
}
?>