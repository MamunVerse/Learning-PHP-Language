<?php
abstract class OurClass{
    // final means child class can't change/overwrite this method
    final function doSomething(){
        echo "Doing Something";
    }
}

class MyClass extends OurClass{

}

$mc = new MyClass();
$mc->doSomething();