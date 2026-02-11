<?php

class Student
{
    public string $id;
    public string $name;
    public int $age;

    public function __clone()
    {
        unset($this->age);
    }
}

$student1 = new Student();
$student1->id = "1";
$student1->name = 'Aby';
$student1->age = 20;

$student2 = clone $student1;

var_dump($student1);
var_dump($student2);