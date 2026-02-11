<?php

class Person {
    const AUTHOR = "Abhysta";

    function info() {
        echo self::AUTHOR . PHP_EOL;
    }
}

$person = new Person();
$person->info();