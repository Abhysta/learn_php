<?php

class PersonConstructor {
    var string $name;
    var ?string $address;

    function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }
}

$person = new PersonConstructor("John Doe", "Jakarta");
var_dump($person);