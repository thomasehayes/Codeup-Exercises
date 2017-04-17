<?php 

class Log {
	private $filename;
	private $handle;
	public $date;



	public function __construct($prefix = 'log') 
	{
		$this->date = date("Y-m-d");
		$this->setFilename($prefix);
		$this->setHandle();
	}

	protected function setFilename($prefix) {
		$this->filename = "{$prefix}-{$this->date}.log";
	}

	protected function setHandle() {
		$this->handle = fopen($this->filename, "a");
	}

	public function getFilename() {
		return $this->filename;
	}

	public function getHandle() {
		return $this->handle;
	}

	public function logMessage($logLevel, $message)
	{
		$output = date("Y-m-d H:i:s"). " " . $logLevel . " " . $message .  PHP_EOL;
	    fwrite($this->handle, $output);
	}

	public function logInfo($message){
    	$this->logMessage("INFO", $message) . PHP_EOL;
	}

	public function logError($message){
	    $this->logMessage("ERROR", $message) . PHP_EOL;
	}

	public function __destruct() 
	{
		fclose($this->handle);
	}
}


//Ryan's Version
// class Log {

// 	public $filename;
// 	public $handle;

// 	public function __construct($prefix = 'log') 
// 	{
// 		$this->filename = $prefix . "-" . date("Y-m-d") . ".log";
// 		$this->handle = fopen($this->filename, 'a');
// 	}

// 	public function logMessage($level, $message) 
// 	{
// 		$timestamp = date("Y-m-d H:i:s");

// 		$logEntry = PHP_EOL . "$timestamp - $level - $message";

// 		fwrite($this->handle, $logEntry);
// 	}

// 	public function info($message) 
// 	{
// 		$this->logMessage("INFO", $message);
// 	}

// 	public function error($message) 
// 	{
// 		$this->logMessage("ERROR", $message);
// 	}

// 	public function __destruct() 
// 	{
// 		fclose($this->handle);
// 	}
// }

 ?>