<?php

trait HasName
{
    public string $name;
}

trait sayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye null" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello null" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait All
{
    use HasName, sayGoodBye, sayHello;
}

class Person
{
    use All;
}

$person = new Person();
$person->goodBye("Aby");
$person->sayHello("Aby");

$person->name = "Huda";
echo $person->name;
