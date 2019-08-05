<?php
include 'Point.php';

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSPeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSPeed()
    {
        return $this->xSpeed;
    }

    public function setYSPeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSPeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        $arr = [];
        array_push($arr, $this->x, $this->y, $this->xSpeed, $this->ySpeed);
        return $arr;
    }

    public function toString()
    {
        return "(" . implode(",", $this->getSpeed()) . ")";
    }
}