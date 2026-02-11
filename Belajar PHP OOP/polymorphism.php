<?php
class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function sayHai(string $name) {
        echo "Hi $name" . PHP_EOL;
    }
}

class BackEndProgrammer extends Programmer
{
    function sayHai(string $name)
    {
        echo "Halo Halo $name" . PHP_EOL;
    }
}

class FrontEndProgrammer extends Programmer
{
}

//polymorphism
class Company
{
    public Programmer $programmer;
}

//polymorphism di function

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hello BackEnd $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEnd $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Fullstack $programmer->name" . PHP_EOL;
    }
}