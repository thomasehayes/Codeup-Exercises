<?php

function parseContacts($contents)
{
	$contacts = array(); 
	// Open 
	$file = "contacts.txt";
	$handle = fopen($file, 'r');
	$contents = fread($handle, filesize($file));
	$person = explode("\n", $contents);

	foreach ($person as $number) {
		$info = explode("|", $number);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
		$eachContact = [
			"name" => $info[0],
			"number" => $info[1]
		];
		$contacts[] = $eachContact;

	}

	fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));