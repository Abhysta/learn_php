<?php

namespace Data;

//contravariance
class Food
{
}

class AnimalFood extends Food
{
}

//covariance
abstract class Hewan
{
    public string $name;

    abstract public function run(): void;

    public abstract function eat(AnimalFood $food): void;
}

class Kucing extends Hewan
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $food): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Anjing extends Hewan
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
