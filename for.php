<?php 

fwrite(STDOUT, 'Enter the start of the range ');
$start = trim(fgets(STDIN));

do {
	fwrite(STDOUT, 'Enter numeric start value ');
	$start = trim(fgets(STDIN));

} while (!is_numeric($start));

fwrite(STDOUT, 'Enter the end of the range ');
$end = trim(fgets(STDIN));

do {
	fwrite(STDOUT, 'Enter numeric end value ');
	$end = trim(fgets(STDIN));
} while (!is_numeric($end));

for ($i = $start; $i <= $end ;$i++) {
	echo $i . PHP_EOL;
}
?>