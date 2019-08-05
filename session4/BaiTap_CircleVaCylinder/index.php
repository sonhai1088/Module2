<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
$circle = new Circle(5, 'blue');
echo $circle->toString().'<br>'.'<br>';
$cylinder = new Cylinder(5, 'green', 10);
echo $cylinder->toString();
