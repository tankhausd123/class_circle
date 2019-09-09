<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(5,"red");
echo "Circle Area: " .$circle->calculateArea()."<br>";
echo "Circle Perimeter: " .$circle->calculatePerimeter()."<br>";
echo $circle->toString(). "<br>";

$cylinder = new Cylinder(10, "black", 5);
echo "Cylinder Area: " .$cylinder->calculateArea(). "<br>";
echo "Cylinder Volume: " .$cylinder->calculateVolume(). "<br>";
echo $cylinder->toString();