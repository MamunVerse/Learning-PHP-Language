<?php

class AA{

    protected static $name;

    static function sayHi(){
        self::$name = "Hello";
        echo "Hi from, A\n";
    }
}

class BB extends AA{
    static function sayHi(){
        parent::sayHi();
        echo "Hi from, B\n";
        echo parent::$name;
    }
}

BB::sayHi();

