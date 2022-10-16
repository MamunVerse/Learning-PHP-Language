<?php

class Animal{

    protected $name; // Child class will get protected value

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    function greet(){}

    protected function addTitle($title){
        $this->name = $title." ".$this->name;
    }
}

class Human extends Animal{
    function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} say Hi\n";
    }
}

class Cat extends Animal{
    function greet(){
        echo "{$this->name} say Meow\n";
    }
}

$h1 = new Human('Mamun');
$h1->greet();

$h1 = new Cat('Sonali');
$h1->greet();