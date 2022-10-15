<?php

const DB_NAME = '/home/mamun/Desktop/php/lwh/CRUD_Using_file/data/db.txt';

function seed(){
    $data = [
        [
            'id' => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => 11,
        ],
        [
            'id' => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll' => 12,
        ],
        [
            'id' => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll' => 9,
        ],
        [
            'id' => 4,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll' => 8,
        ],
        [
            'id' => 5,
            'fname' => 'Jhon',
            'lname' => 'Rozario',
            'roll' => 7,
        ],
    ];

    $serializeData = serialize($data);
    file_put_contents(DB_NAME, $serializeData, LOCK_EX);
}

function generateReport(){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    ?>
    <table class="table table-bordered table-striped ">
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php
            foreach ($students as $student){
                ?>
                    <tr>
                        <td><?php printf("%s %s", $student['fname'], $student['lname']) ?></td>
                        <td><?php printf("%d", $student['roll']) ?></td>
                        <td><?php printf("<a href='/CRUD_Using_file/index.php?task=edit&id=%s'>Edit</a> | <a href='/CRUD_Using_file/index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id']) ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <?php

}