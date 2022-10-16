
<?php

    class MathCalculator{
        private $number;
        static $name;
        /*
        // Static method can be called without creating new Object
        // $this not allowed in static method
        // Need to call self:: to access static method & property
        */
        static function fibonacci($n){
            self::$name = 12;
            self::doSomething();
            echo "Fibo {$n} and name is\n";
        }
        static  function doSomething(){
            echo "Doing something\n";
        }

        function factorial($n){

            echo "Fac  {$n}\n";
        }
    }

    $mathc = new MathCalculator();
    $mathc->fibonacci(8);

//    MathCalculator::fibonacci(8);
//    MathCalculator::factorial(7);