<?php
$contents = contactList();
$filename = 'contacts.txt';

function contactList() {
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));

    $people = explode("\n", $contents);
    // var_dump($people);
    $contactListArray = [];
    foreach ($people as $key => $person) {
        $personArray = explode("|", $person);
        // echo $personArray[1];
        $contactListArray[$key]['name'] = $personArray[0];
        $contactListArray[$key]['number'] = $personArray[1];
       }
     
    return $contactListArray;
}

function addContact($contents, $filename) {

    $addContactHandle = (fopen($filename, 'a'));
    fwrite(STDOUT, "Contact Name: ");
    $contactName = trim(fgets(STDIN));
    fwrite(STDOUT, "Contact Number: ");
    $contactNumber = trim(fgets(STDIN));
    fwrite($addContactHandle, PHP_EOL .  $contactName . "|" . $contactNumber);
    fclose($addContactHandle);

}

function deleteContact($contents, $filename) {
    $contactsString = contactList();

}

function menu($contents, $filename) {

    do {
        fwrite(STDOUT, "Select from the following options: " . PHP_EOL);
        echo "1) Show all contacts" . PHP_EOL;
        echo "2) Add new contact" . PHP_EOL;
        echo "3) Search contact by name" . PHP_EOL;
        echo "4) Delete an existing contact" . PHP_EOL;
        echo "5) Exit" . PHP_EOL;
        $choice = fgets(STDIN);
        if ($choice == 1) {
            echo "----------CONTACTS----------\n\n";
            echo "Name         |  Phone Number" . PHP_EOL;
            echo "----------------------------". PHP_EOL;
            clearstatcache();
            $contents = contactList();
            var_dump($contents)  . PHP_EOL;

        } else if ($choice == 2) {
            addContact($contents, $filename);

        } else if ($choice == 3) {
            echo $contents . PHP_EOL;

        } else if ($choice == 4) {
            echo $contents . PHP_EOL;
        }

    } while ($choice != 5);
}

menu($contents, $filename);


// Justin's solution
// function parseContacts($file)
// {
//     $contacts = array(); 
//     // Open 
//     // $file = "contacts.txt";
//     $handle = fopen($file, 'r');
//     $contents = trim(fread($handle, filesize($file)));
//     fclose($handle);

//     $person = explode("\n", $contents);

//     foreach ($person as $number) {
//         $info = explode("|", $number);
//         $info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
//         $eachContact = [
//             "name" => $info[0],
//             "number" => $info[1]
//         ];
//         $contacts[] = $eachContact;
//     }

//     return $contacts;
// }

// function showContacts($filename) {
//     //clear cache for updated results in real time
//     clearstatcache();

//     //Call parseContacts function to grab an array of all contacts in a given file
//     $contacts = parseContacts($filename);

//     //Echo out template for a pretty display to the command line
//     echo "----------CONTACTS----------\n\n";
//     echo "Name         |  Phone Number" . PHP_EOL;
//     echo "----------------------------";

//     //Iterate over each contact and display with correct formatting
//     foreach ($contacts as $contactArray) {
//         echo str_pad($contactArray['name'], 15). "|" . "     " . $contactArray['number'] . PHP_EOL;
//     }
// }

// // Adds a new contact to a specified file
// function addNewContact($filename, $name, $number){

// }

// //Shows a specific contact based on a given string
// function showContact($filename, $name) {
//     //Call parseContacts to get an updated array of contacts
//     $contacts = parseContacts($filename);

//     foreach ($contacts as $contactsArray) {
//         if (is_numeric(strpos($contactsArray['name'], trim($name))) !== false) {
//             echo "----------CONTACTS----------\n\n";
//             echo "Name         |  Phone Number" . PHP_EOL;
//             echo "----------------------------" . PHP_EOL;
//             echo str_pad($contactArray['name'], 15). "|" . "     " . $contactArray['number'] . "\n\n\n";
//         }
//     }
// }

// // Test showContact() to see if it works

// echo "PLease enter a name to serach for: ";
// $name = fgets(STDIN);
// showContact("contacts.txt", $name);

// Adds a new contact to a specified file
// function addNewContact($filename, $name, $number) {
//     $file = $filename;
//     $handle = fopen($file, 'a');

//     $entry = trim($name) . "|" . trim($number);
//     fwrite($handle, PHP_EOL . $entry);

//     echo "\nContact added successfully.\n"
//     fclose($handle);
// }

// To test addNewContact
// Call function
// addNewContact("contacts.txt", "bob smith", "2222222222");

//Deletes contacts that match a given string
// function deleteContact($filename, $name) {
//     $contactsArrary = parseContacts($filename);

//     // Search all contacts for a match
//     foreach($contactsArray as $contact) {
//         if (is_numeric(strpos($contactsArray['name'], trim($name))) == false) {
//             $contactFound = true;
//             break;
//         }
//     }


//     // Delete contact
//         // Rewrite the file with all the contacts except the matching contact to delete

//     if ($contactFound == true) {
//         $handle = fopen($filename, 'w');

//         foreach($contactsArray as $contact) {
//             if (is_numeric(strpos($contactsArray['name'], trim($name))) !== false) {
//                 $plainNumber = substr($contact['number'], 0, 3) . substr($contact['number'], 4, 3) . substr($contact['number'],8);
//                 fwrite($handle, PHP_EOL . $contact['name'] . "|" . $plainNumber);
//             }
//         }
//         fclose($handle);
//         echo "\n CONTACT DELETED!\n\n\n";

//     } else {
//         echo "No Contact to delete by that name. \n";
//     }

//     showContacts($filename);
// }

// //to test deleteContacts()
// // deleteContacts("contacts.txt", "Bob");

// // Displays menu options to the user and validates a correct selection
// function mainMenuSelect() {
//     $selection = 0;

//     while (!is_numeric($selection) || $selection < 1 || $selection > 5) {
//         echo "\n\n1) View Contacts" . PHP_EOL;
//         echo "\n\n2) Add Contact" . PHP_EOL;
//         echo "\n\n3) Search Contacts" . PHP_EOL;
//         echo "\n\n4) Delete Contact" . PHP_EOL;
//         echo "\n\n5) Exit" . PHP_EOL;
//         $selection = (int) trim(fgets(STDIN));
//         echo "\n\n";
//     }

//     return $selection;
// }


// //To test mainMenuSelect()
// // mainMenuSelect();



// //Contains conditional logic based on a user menu choice
// // Gets user input if needed, and calls specific functions passing in the input
// function runApp($filename) {
//     echo "\n\n=======================\n";
//     echo "         CONTACTS MANAGER APP       ";
//     echo "============================";

//     $choice = 0;

//     showContacts($filename);

//     while ($choice != 5) {

//         $choice = mainMenuSelect();
//         $contactName = "";
//         $contactNumber = "";

//         switch($choice) {
//             case 1 :
//                 showContacts($filename);
//                 break;
//             case 2 :
//                 echo "Please enter a new contact name: ";
//                 $contactName = trim(fgets(STDIN));
//                 echo "PLease enter a new contact number: ";
//                 $contactNumber = trim(fgets(STDIN));
//                 addNewContact($filename, $contactName, $contactNumber);
//                 break;
//             case 3 :
//                 echo "Please enter a contact name to view: ";
//                 $contactName = trim(fgets(STDIN));
//                 showContact($filename, $contactName);
//                 break;
//             case 4 :
//                 echo "Please enter a contact name to delete: ";
//                 $contactName = trim(fgets(STDIN));
//                 deleteContact($filename, $contactName);
//                 break;
//             case 5 :
//                 break;
//         }

//     }
//     echo "GoodBye!!\n\n";
// }
// To run the whole app
// runApp("contacts.txt")