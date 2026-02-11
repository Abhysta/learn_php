<?php

abstract class Animal
{

    public $name;

    abstract public function run(): void;
}

class Cat extends Animal
{

    public function run(): void
    {
        echo "Cat is running" . PHP_EOL;
    }
}

$cat = new Cat();
$cat->run();
