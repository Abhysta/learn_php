<?php

require_once "interface.php";

use Data\Avanza;

$car = new Avanza();
$car->drive();
echo $car->getTire();
