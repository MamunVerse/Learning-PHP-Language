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

    function getSristricts(){
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

//$_districts = $dristricts->getSristricts();

foreach ($dristricts as $district){
    echo $district."\n";
}

//print_r($dristricts);