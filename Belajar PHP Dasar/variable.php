<?php

$name = "Abhysta";
$age = 22;

echo <<<Abhysta
Hello $name
your age is $age
Abhysta;

$names = "Abhysta";
$$names = "Woww";

echo <<<Abhysta
Hello $names 
you really $Abhysta
Abhysta;