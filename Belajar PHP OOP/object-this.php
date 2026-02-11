<?php

require_once "this-keyword.php";

$person = new Person();
$person->name = "Abhysta";
$person->sayHello(null);

$person2 = new Person();
$person2->name = "Huda";
$person2->sayHello("Abhysta");