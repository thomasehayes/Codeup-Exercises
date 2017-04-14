<?php 

// require_once "Person.php";

// $thisGuy = new Person();

// $thisGuy->name = "Bob";
// $thisGuy->age = "43";

// echo $thisGuy->returnName();

// $thisGuy->echoAge();

// $thisGuy->getJob();
// 	var_dump($thisGuy->employed);

// $thisGuy->getOlder();

// $thisGuy->echoAge();

// $thisGuy->passAway();

// $thisGuy->echoAge();

// require_once "Pet.php";

// $petExercise = new Pet();

// $petExercise->species = "Dog";
// $petExercise->weight = 15;
// $petExercise->color = "blonde";
// $petExercise->name = "Wally";

// $petExercise->eat();

// $petExercise->move();

// $petExercise->sleep();

//9.2.1 Inheritance 
require_once'Person.php';
require_once 'Superhero.php';

$person = new Person('John', 'Doe');
echo $person->fullName() .PHP_EOL;

$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';

echo $superman->alterEgo() . PHP_EOL;
var_dump($superman->hasCape()) . PHP_EOL;
?>



