<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant(){
        return pow($this->b,2) - 4*$this->a*$this->c;
    }
    public function getRoot1(){
        return (-$this->get + pow((pow($this->b,2) - 4*$this->a*$this->c), 0.5))/(2*$this->a);
    }
    public  function getRoot2(){
        return (-$this->b - pow((pow($this->b,2) - 4*$this->a*$this->c), 0.5))/(2*$this->a);
    }

}