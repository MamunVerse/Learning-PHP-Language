<?php

interface StudentInterface{
    function displayName();
}

class ImprovedStudent implements StudentInterface {
    private $name;
    private  $title;
    function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName(){
        echo "Hello From {$this->title} {$this->name}";
    }
}


class Student implements StudentInterface{

    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName(){
       echo "Hello From ".$this->name;
    }
}

//class StudentManeger{
//    function introduceStudent($name){
//        $st = new Student($name);
//        $st->displayName();
//    }
//}

class StudentManeger{
    function introduceStudent(StudentInterface $student){
        $student->displayName();
    }
}

$st = new Student("Rony");
$ist = new ImprovedStudent("Mamun", "Mr");
$sm = new StudentManeger();

$sm->introduceStudent($ist);