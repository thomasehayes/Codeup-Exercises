<?php 

class Person {

	// Variable and function definitions

	public $name;
	public $age;
	public $employed;

	public function returnName($someName)
	{
		return $this->name . PHP_EOL;
	}

	public function getOlder($number)
	{
		$this->number++ . PHP_EOL;
	}

	public function echoAge($someAge)
	{
		echo $this->age . PHP_EOL;
	}

	public function quitJob($boolean) 
	{
		$this->boolean = false . PHP_EOL;
	}

	public function getJob($boolean) 
	{
		$this->boolean = true . PHP_EOL;
	}

	public function passAway($number) 
	{
		$this->number = 0 . PHP_EOL;
	}

}





