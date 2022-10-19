<?php

class DistractCollection implements  IteratorAggregate {
    private $distracts;
    public function __construct()
    {
        $this->distracts = array();
    }

    function add($dristrict){
        array_push($this->distracts, $dristrict);
    }

    function getDristricts(){
        return $this->distracts;
    }

    function getIterator()
    {
        return new ArrayIterator($this->distracts);
    }

}

$dristricts = new DistractCollection();
$dristricts->add("Rajshahi");
$dristricts->add("Bogura");
$dristricts->add("Sylhet");
$dristricts->add("Chittagong");

//$_districts = $dristricts->getDristricts();

foreach ($dristricts as $district){
    echo $district."\n";
}

//print_r($dristricts);