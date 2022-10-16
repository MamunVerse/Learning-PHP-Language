<?php

class Human{

    public $name;
    public $age;

    function __construct($name, $age = null)   // __construct() function call automaticity
    {
        $this->name = $name;
        $this->age = $age;
    }

    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName()
    {
        if($this->age){
            echo "My name is {$this->name}, I am {$this->age} years old. \n";
        }else{
            echo "My name is {$this->name}. \n";
        }
    }
}


$h1 = new Human('Mamun', '22'); //  Object With property
$h1->sayHi();
$h2 = new Human('Rony', '24');
$h2->sayHi();
$h3 = new Human('Sihab');
$h3->sayHi();


