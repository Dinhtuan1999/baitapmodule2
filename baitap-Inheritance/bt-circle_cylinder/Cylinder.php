<?php
include_once("Circle.php");
class Cylinder extends Circle{
    public $height;
    public function __construct($name,$color,$radius,$height)
    {
        parent::__construct($name,$color,$radius);
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height =$height;
    }
    public function calculateArea(){
        return parent::calculateArea()*$this->height;
    }
    function toString()
    {
        return parent::toString()."<br>"."chiều cao : ".$this->height;
    }
}
