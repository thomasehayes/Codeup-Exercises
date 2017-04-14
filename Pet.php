2) Write a class of Pet:
    - write properties for species, weight, color, name
    - write methods for eat, move, sleep
    - Instantiate 3 different pet objects and set all properties in oop_test.php.

<?php 

class Pet {

	public $species;
	public $weight = 15;
	public $color;
	public $name;

	public function eat() 
	{
		echo $this->name . " weighs " . ($this->weight += 0.5) . " pounds after eating" . PHP_EOL;
	}

	public function move()
	{
		echo $this->name . " weighs " . ($this->weight += 0.5) . " pounds after he ran!" . PHP_EOL;
	}

	public function sleep()
	{
		echo $this->name . " weighs " . $this->weight . PHP_EOL;
	}

}

?>