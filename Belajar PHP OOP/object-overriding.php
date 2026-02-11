<?php

require_once "overriding.php";

$manager = new Manager2();
$manager->name = "Abhysta";

$vp = new VicePresident2();
$vp->name = "Huda";

$manager->sayHello("Huda");
$vp->sayHello("Abhysta");
