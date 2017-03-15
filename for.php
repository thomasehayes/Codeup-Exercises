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

if (!is_numeric($countBy)){
	$countBy = 1;
}

for ($i = $start; $i <= $end ;$i += $countBy) {
	echo $i . PHP_EOL;
}
?>