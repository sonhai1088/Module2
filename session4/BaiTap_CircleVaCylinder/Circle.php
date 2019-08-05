<?php

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calculatorArea()
    {
        return pi() * pow($this->getRadius(), 2);
    }
    public function toString()
    {
        return 'Color Circle: '.$this->getColor().'<br>'.'Radius Circle: '.$this->getRadius().'<br>'.'Area Circle: '.$this->calculatorArea();
    }
}


