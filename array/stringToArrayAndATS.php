<!-- 

-->

<?php

// $fruits = ['Apple', 'Banana', 'Mango', 'Pineapple'];

$fruits_string = 'Apple, Banana, Mango, Pineapple';

$fruits = explode(', ', $fruits_string); // explode used to make a string to array.

$fruits_string = join(', ', $fruits); // join used to make a array to string.

//echo $fruits_string;

// Another example
$vegetables = preg_split('/(, |,)/', 'brinjal, broccoli, carrot, capsicum,potato, sweet-potato'); // preg_split used to set multiple condition to make string to array.

echo count($vegetables);