<?php 

class Report {

	public $name;
	public $age;

	// Static method/property means we can access the property/method without having to have an object created

	public static $numberOfReports = 0;

	public function __construct($name = "John Doe", $age) 
	{
		$this->name = $name;
		$this->age = $age;
		
		// increment $numberOfReports
		static::$numberOfReports++;
	}

	public function writeReport($message) 
	{
		// has all of the code logMessage does
	}

	public static function getNumberOfReports() 
	{
		return static::$numberOfReports;
	}
}

?>