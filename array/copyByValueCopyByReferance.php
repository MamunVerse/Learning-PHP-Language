<?php

$person = [
  'fname' => "Mamunur",
  'lname' => "Rashid"
];

$newPerson = &$person; // & used to change data by reference
$newPerson['lname']= 'Khan';

print_r($person);
print_r($newPerson);