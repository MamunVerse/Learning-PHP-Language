<?php

interface BaseAnimal{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal // A class can't extend interface | Only Other interface can
{
    function isAlive()
    {
    }

    function canEat($param1, $param2)
    {
    }

    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal // A class can't extend interface | Only Other interface can
{
    function  canTalk();
}

class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function  canTalk(){}
}

$h = new Human();

echo $h instanceof BaseAnimal;

