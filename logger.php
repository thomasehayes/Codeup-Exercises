<?php

function logMessage($logLevel, $message)
{
    $handle = fopen(date("Y-m-d") . ".log", 'a');
    fwrite($handle,date("Y-m-d H:i:s"). " " . $logLevel . " " . $message .  PHP_EOL);
    fclose($handle);
}

function logInfo($message){
    logMessage("INFO", $message);
}
logInfo("This is an info message.");

function logError($message){
    logMessage("ERROR", $message);
}
logError("This is an error message.");



//====================
//      NOTES
//====================

// $filename = "fruits.txt";
// $fruits = ['apple', 'strawberry', 'kiwi', 'grape', 'mango'];


// function write($filename, $array) {

// 	$handle = fopen($filename, 'a');

// 	foreach ($array as $fruit) {
// 		fwrite($handle, $fruit . PHP_EOL);
// 	}

// 	fclose($handle);


// }
// write($filename, $fruits);

?>




