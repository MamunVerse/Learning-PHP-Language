<?php

const DB_NAME = '/home/mamun/Desktop/php/lwh/CRUD_Using_file/data/db.txt';

function seed($filename){
    $data = [
        [
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => 11,
        ],
        [
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll' => 12,
        ],
        [
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll' => 9,
        ],
        [
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll' => 8,
        ],
        [
            'fname' => 'Jhon',
            'lname' => 'Rozario',
            'roll' => 7,
        ],
    ];

    $serializeData = serialize($data);
    file_put_contents($filename, $serializeData, LOCK_EX);
}