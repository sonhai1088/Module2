<?php

include 'Rectangle.php';
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle ->height;
echo $rectangle ->width;
$rectangle -> height = 30;
$rectangle -> width = 20;
echo $rectangle -> height;
echo $rectangle -> width;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo ("Your Rectangle". $rectangle->display());