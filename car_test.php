<?php 

require_once "Report.php";

echo "Good morning, world!" . PHP_EOL;
echo "At the start of my day, I have:" . Report::$numberOfReports . PHP_EOL;

echo "Do you have any idea why I pulled you over today?" . PHP_EOL;

$name = "Bob";
$age = 35;

$report = new Report($name, $age);

$report->writeReport("False alarm");

echo "Reports Total: " . Report::$numberOfReports . PHP_EOL;

$jane = new Report("Jane", 78);
$jane->writeReport("Doing 90 in a 25");


echo "Reports Total: " . Report::$numberOfReports . PHP_EOL;

echo "Today's total number of reports: ". PHP_EOL;
echo Report::getNumberOfReports() . PHP_EOL;

// scenerios for using static methods
// you just need to call a function but you don't need an object or don't have an object
// ex. getNumberOfReports();
// ex. getWorldPopulation();
?>