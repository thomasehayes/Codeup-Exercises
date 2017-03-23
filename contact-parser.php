<?php

function parseContacts($file)
{
	$contacts = array(); 
	// Open 
	// $file = "contacts.txt";
	$handle = fopen($file, 'r');
	$contents = trim(fread($handle, filesize($file)));
	fclose($handle);

	$person = explode("\n", $contents);

	//Fer's example
	foreach ($person as $key => $contact) {
		$tempArr = explode("|", $contents);
		$contacts[$key]["name"] = $tempArr[0];
		$phone = substr($tempArr[1], 0, 3) . "-" . substr($tempArr[1], 3, 3) . "-" . substr($tempArr[1], 6);
		$contacts[$key]["number"] = $phone;
	}

	foreach ($person as $number) {
		$info = explode("|", $number);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
		$eachContact = [
			"name" => $info[0],
			"number" => $info[1]
		];
		$contacts[] = $eachContact;
	}

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));