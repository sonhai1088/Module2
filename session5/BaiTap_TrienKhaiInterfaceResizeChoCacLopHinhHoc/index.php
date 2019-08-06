<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
$rate = rand(1, 100);
echo $rate.'<br>';

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
$circle->resize($rate);
echo 'Circle area 2: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter 2: ' . $circle->calculatePerimeter() . '<br />';


$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
$cylinder->resize($rate);
echo 'Cylinder area 2: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter 2: ' . $cylinder->calculatePerimeter() . '<br />';



$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
$rectangle->resize($rate);
echo 'Rectangle area 2: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter 2: ' . $rectangle->calculatePerimeter() . '<br />';


$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area 2: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter 2: ' . $square->calculatePerimeter() . '<br />';
$square->resize($rate);