<?php 
require_once "Log.php";
date_default_timezone_set("America/Chicago");

$log = new Log();
$log->logError('$bob is undefined');
$log->logInfo('$bob is defined');

?>