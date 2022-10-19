<?php

function autoload($name){
    if(strpos($name, "Planet_")!== false){
        $filename = str_replace("Planet_","", $name);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }

}
spl_autoload_register('autoload');

(new bike)->getType();
$b = new Bike();
$b->getType();

$s = new Spaceship();
$s->launch();

$np = new Planet_Mars();
$np->getName();