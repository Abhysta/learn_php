<?php

class Person {
    var $name;
    var $address;
    var int $age;
    var string $country = "Pekalongan";
    var ?int $phone;

    function sayHello(string $name) 
    {
        echo "Hello $name" . PHP_EOL;
    }
}