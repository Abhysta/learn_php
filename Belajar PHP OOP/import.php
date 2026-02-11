<?php

require_once "namespace.php";

//self keyword
use Data\One\Conflict;
use function Helper\HelpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Conflict();

HelpMe();
echo APPLICATION;

//alias
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

//group declaration
use Data\One\{Conflict as ConflictSample, Sample as Sample1, Sample2 as Sample2};