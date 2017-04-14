<?php 

// class Person {

// 	// Variable and function definitions

// 	public $name;
// 	public $age;
// 	public $employed;

// 	public function returnName()
// 	{
// 		return $this->name . PHP_EOL;
// 	}

// 	public function getOlder()
// 	{
// 		$this->age++ . PHP_EOL;
// 	}

// 	public function echoAge()
// 	{
// 		echo $this->age . PHP_EOL;
// 	}

// 	public function quitJob() 
// 	{
// 		$this->employed = false . PHP_EOL;
// 	}

// 	public function getJob() 
// 	{
// 		$this->employed = true . PHP_EOL;
// 	}

// 	public function passAway() 
// 	{
// 		$this->age = 0 . PHP_EOL;
// 	}

// }

//9.2.1 Inheritance
class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}



