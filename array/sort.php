<?php

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
$fruits2 = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

//sort($fruits, SORT_STRING);
//sort($fruits, SORT_STRING | SORT_FLAG_CASE);


sort($fruits);
print_r($fruits);

asort($fruits2);

print_r($fruits2);

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key