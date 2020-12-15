<?php
include_once('Cylinder.php');
include_once('Circle.php');
$cricle = new Circle("tron",'red',10);
echo $cricle->toString()."<br>";
//'echo $cricle->getColor()."<br>";
//echo $cricle->getRadius()."<br>";'
$cyliner = new Cylinder("tru","blue",10,30);
echo $cyliner->toString();
