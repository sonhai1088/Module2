<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circle)
    {
        $circleOneRadius = $this->getRadius();
        $circleTwoRadius = $circle->getRadius();

        if ($circleOneRadius > $circleTwoRadius) {
            return 1;
        }  else if($circleOneRadius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}