<?php

$fileName = '/home/mamun/Desktop/php/lwh/file/f5.txt';

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
);



/*

// Data Write

$fp = fopen($fileName, "w");

foreach($students as $student){

    fputcsv($fp, $student);
}

fclose($fp);
*/


/*
// Data Read
$fp = fopen($fileName, "r");

while($student = fgetcsv($fp)){

    print_r($student);
}

fclose($fp);
*/


/*
// Add extra one student
$student = array(
    'fname' => 'Mamunur',
    'lname' => 'Rashid',
    'age' => 13,
    'class' => 7,
    'roll' => 17,
);

$fp = fopen($fileName, "a");

fputcsv($fp, $student);
fclose($fp);

*/


// Delete one student data

$data = file($fileName);
print_r($data);
unset($data[1]);
$fp = fopen($fileName, "w");
foreach($data as $line){
    fwrite($fp, $line);
}
fclose($fp);
