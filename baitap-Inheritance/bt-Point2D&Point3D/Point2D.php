<?php


class Point2D
{
protected $x;
protected $y;
public function __construct($x,$y)
{
    $this->x = $x;
    $this->y =$y;
}
public function getX(){
   return $this->x;
}
public function setX($x){
    $this->x =$x;
}
public function getY(){
    return $this->y;
}
public function setY($y){
    $this->y =$y;
}
public function getXY(){
    return [$this->x,$this->y];
}
public function setXY($x,$Y){
    $this->x =$x;
    $this->y =$x;
}
public function toString(){
    return "($this->x,$this->y)";
}
}
