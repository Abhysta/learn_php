<?php

class Manager3
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, im a {$this->title} {$this->name}" . PHP_EOL;
    }
}

class VicePresident3 extends Manager3
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, im a {$this->title} {$this->name}" . PHP_EOL;
    }
}
