<?php

class ParentClass{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "{$this->name} Hi \n";
    }

}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "Hello\n";
    }
}

$cc = new ChildClass('Mamun');