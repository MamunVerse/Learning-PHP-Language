<?php

$vegetable = ['brinjal', 'broccoli', 'carrot', 'capsicum', 'potato'];

$someVegetables = array_slice($vegetable, 2);
$someVegetables2 = array_slice($vegetable, -4, -1);
$someVegetables3 = array_slice($vegetable, -4, -1, true);

print_r($vegetable);
echo "\n";
print_r($someVegetables);
echo "\n";
print_r($someVegetables2);
echo "\n";
print_r($someVegetables3);

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

//$someFruits = array_splice($fruits, 2);

$newFruits = ['jack-fruit'];
$someFruits2 = array_splice($fruits, 2, 2, $newFruits);

print_r($someFruits2);
echo "\n";
print_r($fruits);
