<?php

trait HasName
{
    public string $name;
}

trait canRun
{
    public abstract function run(): void;
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

//contoh overide
class ParentPerson
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye Parent null" . PHP_EOL;
        } else {
            echo "Good Bye Parent $name" . PHP_EOL;
        }
    }
}

class Person extends ParentPerson
{
    use sayGoodBye, sayHello, HasName, canRun {
        // change visibility
        // goodBye as private;
        // sayHello as private;
    }

    function run(): void
    {
        echo "Person $this->name" . PHP_EOL;
    }

    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye Overide null" . PHP_EOL;
        } else {
            echo "Good Bye Overide $name" . PHP_EOL;
        }
    }
}


$person = new Person();
$person->goodBye("Aby");
$person->sayHello("Aby");

$person->name = "Huda";
echo $person->name . PHP_EOL;
$person->run();
