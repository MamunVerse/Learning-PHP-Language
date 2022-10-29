<?php
namespace Project;
//namespace Project\Motorcycles;
use Project\Motorcycles\Bike as Hornet;
use Project\Bike as Pulsar;

include "c1.php";
include "c2.php";



$b = new Bike();

echo $b->getName();

$h = new Hornet();

echo $h->getName();

$p = new Pulsar();

echo $p->getName();