<?php

$student = [
    'fname' => 'Mamunur',
    'lname' => 'Rashid',
    'age' => '24',
    'class' => '12'
];

printf("%s %s \n", $student['fname'], $student['lname']);

$serialize = serialize($student);

$newStudent = unserialize($serialize);

print_r($serialize);
print_r($newStudent);

$jsonData = json_encode($student);

echo $jsonData;

$newStudent = json_decode($jsonData, true);

print_r($newStudent);

