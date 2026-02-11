<?php

require_once "properties.php";

$person = new Person();
//mengisi value nya
$person->name = "Abhysta";
$person->address = "Pekalongan";
$person->age = "22";
$person->phone = null;

var_dump($person);

//mengambil value
echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Age : {$person->age}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;
echo "Phone : {$person->phone}" . PHP_EOL;