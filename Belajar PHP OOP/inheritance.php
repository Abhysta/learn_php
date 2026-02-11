<?php

class Manager {
    var string $name;

    function sayHello(string $name) {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {

}

$manager = new Manager();
$manager->name = "Huda";
$manager->sayHello("Dimas");

$vp = new VicePresident();
$vp->name = "Dimas";
$vp->sayHello("Huda");