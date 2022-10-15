<!--php Version used 8.0-->

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
                        <td><?php printf("<a class='btn btn-info btn-sm' href='/index.php?task=edit&id=%s'>Edit</a> <a class='btn btn-danger btn-sm href='/index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id']) ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <?php
}

function addStudent($fname, $lname, $roll){
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if($_student['roll'] == $roll){
            $found = true;
            break;
        }
    }

    if(!$found){
        $newId = getNewId($students);
        $student = [
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll,
        ];

        $students[] = $student;

        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData, LOCK_EX);
        return true;
    }else{
        return false;
    }

}

function getStudent($id){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $student) {
        if($student['id'] == $id){
            return $student;
        }
    }
    return false;
}

function updateStudent($id, $fname, $lname, $roll)
{
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if($_student['roll'] == $roll && $_student['id']!=$id){
            $found = true;
            break;
        }
    }

    if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;

        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData, LOCK_EX);

        return true;
    }

    return false;
}

function deleteStudent($id){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);


    foreach ($students as $key => $student) {
        if($student['id'] == $id){
            unset($students[$key]);
        }
    }

    $serializeData = serialize($students);
    file_put_contents(DB_NAME, $serializeData, LOCK_EX);
}

function getNewId($students){
    $maxId = max(array_column($students, 'id'));
    return $maxId+1;
}