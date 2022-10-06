<?php

$number1 = [1,4,3,66,54,7,23,1,2];
$number2 = [88,3,21,44,3,28,1,2,7];

$fruits1 = ["a" => "apple", "b" => "banana", "c" => "lemon"];
$fruits2 = ["d" => "pineapple", "b" => "malta", "d" => "grapes", "e" => "lemon"];

$common = array_intersect($number1, $number2); // Get common element from two array
$commonf = array_intersect($fruits1, $fruits2); // Get common element from two array

print_r($common);
print_r($commonf);

$diff = array_diff($number1, $number2); // Get different element from two array
$diff2 = array_diff($fruits1, $fruits2); // Get different element from two array

print_r($diff);
print_r($diff2);