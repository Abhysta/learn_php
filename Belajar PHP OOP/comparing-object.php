<?php

class Student
{
    public string $id;
    public string $name;
    public int $age;
}

$student1 = new Student();
$student1->id = "1";
$student1->name = 'Aby';
$student1->age = 20;


$student2 = new Student();
$student2->id = "1";
$student2->name = 'Aby';
$student2->age = 20;


var_dump($student1 == $student2);
var_dump($student1 === $student2);
