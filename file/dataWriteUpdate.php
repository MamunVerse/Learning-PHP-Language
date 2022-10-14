<?php

$fileName = '/home/mamun/Desktop/php/lwh/file/f2.txt';

// $existingData = file_get_contents($fileName);


/* 
    "w" mode will remove all previus data and add new data
    "a" mode will just append new data in last of old data it don't remove previus data
*/
$fp = fopen($fileName, "a"); 

// fwrite($fp, $existingData);
fwrite($fp, "Friday\n");
fwrite($fp, "Saterday\n");
fwrite($fp, "Sunday\n");



fclose($fp);
