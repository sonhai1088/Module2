<?php
include 'Point2D.php';
include 'Point3D.php';
$point2D = new Point2D(4,6);
$point3D = new Point3D(3,5,7);
echo $point2D->toString()."<br>";

echo $point3D->toString();
//var_dump($point3D->toString());
