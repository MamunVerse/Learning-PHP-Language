<?php

class Student{
    private $name;
    private $age;
    private $class;

    public function __construct($name='',$age='',$class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function  __set($prop, $value){
        $this->$prop = $value;
    }


}

$R = new Student('Mamun', '24', '12');
//$R->setName('Mamun');
$R->age = 55;

echo $R->age;