<?php
class Circle{
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$color,$radius)
    {
        $this->name =$name;
        $this->radius =$radius;
        $this->color =$color;
    }
    public function getName(){
        return $this->name;
    }
    public  function setName($name){
        $this->name =$name;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius =$radius;
    }
    public function getColor(){
     return $this->color;
    }
    public function setColor($color){
        $this->color =$color;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }

    function toString(){
        return "name : ".$this->name ."<br>"."color : ". $this->color ."<br>"."radius : ".$this->radius ."<br>"."diện tích hinh tròn : ".$this->calculateArea();
    }
}
