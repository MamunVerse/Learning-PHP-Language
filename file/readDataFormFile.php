<?php

$file = '/home/mamun/Desktop/php/lwh/file/f1.txt';

if(is_readable($file)){

$fp = fopen($file, "r"); // open and read file 

$line = fgets($fp); // will read line one by one

echo $line;

fclose($fp);

$data = file($file);  // file() will print every line as array
print_r($data);



$data2 = file_get_contents($file); // file_get_contents() will print full file data 
echo $data2;

}