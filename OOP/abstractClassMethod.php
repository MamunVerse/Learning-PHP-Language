<?php

abstract class Shape{
    /*
     abstract methods doesn't have body & you need to implement it on child class (required)
     */
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{

    private $base;
    private $height;

    public function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    function setBase($base){
        $this->base = $base;
    }
    function setHeight($height){
        $this->height = $height;
    }
    function getArea()
    {
        return $this->base*$this->height;
    }
    function getPerimeter(){}
}

class Tringle extends Shape{
    function getArea()
    {
    }
    function getPerimeter(){}
}

$rectangle = new Rectangle(10, 10);
echo $rectangle->getArea();

