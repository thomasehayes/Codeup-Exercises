<?php
$file = "contacts.txt";
$handle = fopen($file, 'r');
$contents = fread($handle, filesize($file));

function parseContacts($contents)
{

	$testArray = explode("\n", $contents);
	foreach ($testArray as $key) {
		$val = explode("|", $key);
		$desiredArray[$val[0]] = $val[1];
}

    return $desiredArray;
}

print_r(parseContacts($contents));
fclose($handle);