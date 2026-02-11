<?php

require_once "polymorphism.php";

$company = new Company();
$company->programmer = new Programmer("Aby");
$company->programmer->sayHai("AKU");
var_dump($company);
$company->programmer = new BackEndProgrammer("Aby");
$company->programmer->sayHai("AKU");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Aby");
var_dump($company);

sayHelloProgrammer(new Programmer("Aby"));
sayHelloProgrammer(new BackEndProgrammer("Aby"));
sayHelloProgrammer(new FrontEndProgrammer("Aby"));