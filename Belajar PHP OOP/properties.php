<?php

class Person {
    var $name;
    var $address;
    //dengan type declaration
    var int $age;
    //dengan default value
    var string $country = "Pekalongan";
    //nullable
    var ?int $phone;
}