<?php
$filename = 'contacts.txt';
$handle = fopen($filename, 'r');
$contents = trim(fread($handle, filesize($filename)));

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
            echo $contents . PHP_EOL;
        } else if ($choice == 2) {
            echo $contents . PHP_EOL;
        } else if ($choice == 3) {
            echo $contents . PHP_EOL;
        } else if ($choice == 4) {
            echo $contents . PHP_EOL;
        }
    } while ($choice != 5);
}

menu($contents, $filename);