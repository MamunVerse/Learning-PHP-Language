<?php

class MyClass{
    const City = "Dhaka";

    function sayHi(){
        echo "Hi From ".self::City."\n";
    }

}

$m = new MyClass();
$m->sayHi();
echo MyClass::City;