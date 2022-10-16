<?php

class Fund{
    private $fund;

    function __construct($initialFund=0){
        $this->fund = $initialFund;
    }
    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
//$ourFund->fund = '50'; //  in public property it accessible / not possible in privet property
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->getTotal();
$ourFund->deductFund(20);
$ourFund->getTotal();