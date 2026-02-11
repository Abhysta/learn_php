<?php

class Person
{
    public string $firstName = "Abhysta";
    public string $lastName = "Huda";
}

$array = [
    "firstName" => "Aby",
    "lastName" => "Huda"
];

$object = (object) $array;
$objectClass = (object) new Person();

var_dump($object);
var_dump($objectClass);

$backArray = (array) $object;
var_dump($backArray);