<?php 

require_once "Person.php";

$thisGuy = new Person();

$thisGuy->name = "Bob";
$thisGuy->age = "43";

echo $thisGuy->returnName($thisGuy->name);

$thisGuy->echoAge($thisGuy->age);
?>


// Procedural code

$name = 'Bob';
$age = "43";

echo returnName($name);

echoAge($age);

$employed = getJob($employed);
var_dump($employed);

$age = getOlder($age);

echoAge($age);

$age = passAway($age);

echoAge($age);



