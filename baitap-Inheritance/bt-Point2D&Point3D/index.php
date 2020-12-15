<?php
include_once "Point3D.php";

$point2d = new Point2D(2, 3);

echo $point2d->toString() . "<br>";

print("<pre>" . print_r($point2d, true) . "</pre>");


$point3d = new Point3D(5, 10, 15);

echo $point3d->toString() . "<br>";


print("<pre>" . print_r($point3d, true) . "</pre>");
