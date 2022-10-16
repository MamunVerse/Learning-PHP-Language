<?php

class Human{   // This is class

    public $name; // this is property

    function sayHi(){ // this is method
        echo "Salam\n";
        $this->sayName();
    }
    function sayName()
    {
        echo "My name is {$this->name}";
    }
}

class Cat{
    function sayHi(){
        echo "Meow";
    }
}

class Dog{
    function sayHi(){
        echo "Woof";
    }
}

$h1 = new Human(); // This is objecrt
$h1->name = "Rubel"; // this is property 
$h1->sayHi();


//$c1 = new Cat();
//$d1 = new Dog();
//
//$h1->sayHi();
//$c1->sayHi();