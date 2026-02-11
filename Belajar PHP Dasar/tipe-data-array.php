<?php 

//membuat array dapat menggunakan 2 cara seperti di bawah ini

$value = array("Abhysta", 22, true);
var_dump($value);

$names = ["Abhysta", "Huda"];
var_dump($names);

//

$names[0] = "Budi";
var_dump($names);
unset($names[0]);
var_dump($names);
$names[] = "Abhysta";
var_dump($names);
var_dump(count($names));

//map
$abhysta = array(
    "name" => "Abhysta",
    "age" => 22
);

$huda = [
    "name" => "Huda",
    "age" => 22
];

var_dump($abhysta);
var_dump($huda);

//array in array
$abhysta = array(
    "name" => "Abhysta",
    "age" => 22,
    "friends" => ["Budi", "Huda"]
);
var_dump($abhysta);