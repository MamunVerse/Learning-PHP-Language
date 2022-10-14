<?php

$fileName = '/home/mamun/Desktop/php/lwh/file/f6.txt';

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
// Store Data
$data = serialize($students);
file_put_contents($fileName, $data, LOCK_EX);
*/


// Read Data
$dataFromFile = file_get_contents($fileName);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);


/*
// Delete one student data
$dataFromFile = file_get_contents($fileName);
$allStudents = unserialize($dataFromFile);
unset($allStudents[1]);

$data = serialize($allStudents);
file_put_contents($fileName, $data, LOCK_EX);
*/

/*
// Add new Student
$student = array(
    'fname' => 'Mamunur',
    'lname' => 'Rashid',
    'age' => 13,
    'class' => 7,
    'roll' => 17,
);

$dataFromFile = file_get_contents($fileName);
$allStudents = unserialize($dataFromFile);

array_push($allStudents, $student);

$data = serialize($allStudents);

file_put_contents($fileName, $data, LOCK_EX);

*/
