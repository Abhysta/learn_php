<?php

$name = "Abhysta Huda";

echo "Nama : " . $name . PHP_EOL;
//maksud dari PHP.EOL adalah = \n atau PHP End Of Line
echo "Nilai : " . 100 . "\n";

//konversi
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.1";
var_dump($valueFloat);

//mengakses karakter
$name = "Abhysta";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;

//variable parsing
echo "Name : $name, Semangat Belajar" . PHP_EOL;

//curly brace
echo "My name is M.{$name}" . PHP_EOL;