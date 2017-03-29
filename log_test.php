<?php 
require_once "Log.php";

$log = new Log();

$log->filename = "log-" . date("Y-m-d") . ".log";
$log->logInfo("This is an info message.");
$log->logError("This is an error message.");
?>