<?php
include_once "MoveablePoint.php";

$point = new Point(10,15);
echo $point->toString();

print("<pre>" . print_r($point, true) . "</pre>");



$moveablepoint = new MoveablePoint(5,20, 50,80);
echo $moveablepoint->toString()."<br><br><br>";


echo $moveablepoint->toString();

print("<pre>" . print_r($moveablepoint, true) . "</pre>");





print("<pre>" . print_r($moveablepoint->move(), true) . "</pre>");
//print("<pre>" . print_r($moveablepoint->move(), true) . "</pre>");
//print("<pre>" . print_r($moveablepoint->move(), true) . "</pre>");


