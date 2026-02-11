<?php

require_once "constructor-overriding.php";

$manager = new Manager3();
$manager->name = "Abhysta";

$vp = new VicePresident3();
$vp->name = "Huda";

$manager->sayHello("Huda");
$vp->sayHello("Abhysta");
