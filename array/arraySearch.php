<?php

$fruits = ['a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango'];

$numbers = [1,11,2,56,3,4,22,77,5];

if(in_array(57, $numbers)){
    echo 'Yes Found';
}else{
    echo "Not Found";
}