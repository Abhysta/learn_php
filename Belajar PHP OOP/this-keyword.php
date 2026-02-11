<?php

class Person {
    var $name;

    function sayHello(?string $name){
        if (is_null($name)) {
            echo "Hi, My name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
        
    }
}