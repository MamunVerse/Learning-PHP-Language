<?php

$fileName = '/home/mamun/Desktop/php/lwh/file/f7.txt';

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
// Write Data
$encodedData = json_encode($students);
file_put_contents($fileName, $encodedData, LOCK_EX);
*/

/*
// Read Data
$data = file_get_contents($fileName);
$allStudents = json_decode($data, true);
print_r($allStudents);
*/

