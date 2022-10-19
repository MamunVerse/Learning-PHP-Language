<?php

class A{

    /*
     * if a method static in parent class you need to call this method static
     * on child method
     */
    static function sayHi(){
        echo "Hi from A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi from B\n";
        parent::sayHi();
    }
}

B::sayHi();