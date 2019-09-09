<?php


class Circle
{
public $radius;
public $color;
public function __construct($radius,$color)
{
    $this->radius = $radius;
    $this->color = $color;
}
public function calculateArea(){
    return pi()*pow($this->radius,2);
}
public function calculatePerimeter(){
    return $this->radius*2*pi();
}
public function toString(){
    return "radius: " .$this->radius."<br> color: " .$this->color;
}
}