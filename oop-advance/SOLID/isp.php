<?php
// Interface segregation

/*
 * Don't put anything in a interface that don't need to any one.
 */

interface Vehicle{
//    function hasTwoTires();
//    function hasFourTires();
//    function hasSixTires();
//    function isDieselCompatible();
//    function isPetrolCompatible();
    function getMileage();
    function getName();
    function getPrice();
}

interface TwoWheelers{
    function hasTwoTires();
}

interface FourWheelers{
    function hasFourTires();
}

interface SixWheelers{
    function hasSixTires();
}

class MotorCycle implements Vehicle , TwoWheelers {
    function getMileage(){

    }
    function getName(){

    }
    function getPrice(){

    }
    function hasTwoTires(){

    }
}

class Truck implements Vehicle , SixWheelers {
    function getMileage(){

    }
    function getName(){

    }
    function getPrice(){

    }
    function hasSixTires(){

    }
}