<?php

$fileName = '/home/mamun/Desktop/php/lwh/file/f3.txt';


/* 
    "r+" this will open file in read and write mode
*/
$fp = fopen($fileName, "r+"); 

$line = fgetc($fp);

echo $line;

fwrite($fp, "Friday\n");

$line = fgetc($fp);

echo $line;

fclose($fp);


 