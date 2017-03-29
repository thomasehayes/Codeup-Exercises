<?php 

class Log {
	public $filename;

	public function logMessage($logLevel, $message)
	{
	    $handle = fopen(date("Y-m-d") . ".log", 'a');
	    fwrite($handle,date("Y-m-d H:i:s"). " " . $logLevel . " " . $message .  PHP_EOL);
	    fclose($handle);
	}

	public function logInfo($message){
    	$this->logMessage("INFO", $message);
	}


	public function logError($message){
	    $this->logMessage("ERROR", $message);
	}

}

?>