<?php

class Manager2
{
    var string $name;

    public function sayHello(string $name)
    {
        echo "Hello $name, im a Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresident2 extends Manager2
{
    public function sayHello(string $name)
    {
        echo "Hello $name, im a VP {$this->name}" . PHP_EOL;
    }
}
