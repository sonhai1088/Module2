<?php
include_once 'Point2D.php';
class Point3D extends Point2D {
    public $z;
  public function __construct($x, $y, $z)
  {
      parent::__construct($x, $y);
      $this->z = $z;
  }
    public function getZ(){
        return $this->z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getXYZ(){
        $arr = [];
        array_push($arr,$this->x,$this->y, $this->z);
        return $arr;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function toString(){
      return "(".implode(",", $this->getXYZ()).")";

    }
}