<?php

interface HelloWorld
{
    function sayHello(): void;
}

//tempatkan argument nya setelah class
$helloworld = new class("Anonymous Class") implements HelloWorld
{
    private string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloworld->sayHello();
