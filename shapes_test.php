<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$area = new Rectangle(5, 4);
echo "Area of a rectangle: ";
echo $area->area() . PHP_EOL;

$perimeterOfRectangle = new Rectangle(1, 3);
echo "Perimeter of a rectangle: ";
echo $perimeterOfRectangle->perimeter() . PHP_EOL;


$square = new Square(5);
echo "Perimeter of a square: ";
echo $square->perimeter() . PHP_EOL;

$areaOfSquare = new Square(6);
echo "Area of a square: ";
echo $areaOfSquare->area(). PHP_EOL;
?>