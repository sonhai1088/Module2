<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calculatorVolume()
    {
        return parent::calculatorArea() * $this->height;
    }

    public function toString()
    {
        return 'Color Cylinder: '.$this->getColor().'<br>'.'Height Cylinder: '.$this->getHeight().'<br>'.'Volume Cylinder: '.$this->calculatorVolume();
    }
}
