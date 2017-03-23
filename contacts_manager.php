<?php
//show all your contacts
function parseContacts($file)
{
	$contacts = array(); 
	$handle = fopen($file, 'r');
	$contents = trim(fread($handle, filesize($file)));
	fclose($handle);

	$person = explode("\n", $contents);

	foreach ($person as $key => $contact) {
		$tempArr = explode("|", $contents);
		$contacts[$key]["name"] = $tempArr[0];
		$phone = substr($tempArr[1], 0, 3) . "-" . substr($tempArr[1], 3, 3) . "-" . substr($tempArr[1], 6);
		$contacts[$key]["number"] = $phone;
	}

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));

//add a new contact