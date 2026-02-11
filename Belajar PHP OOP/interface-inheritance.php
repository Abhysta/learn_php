<?php

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintance
{
    function isMaintance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintance
{
    function drive(): void
    {
        echo "Jalan" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4 . PHP_EOL;
    }

    function getBrand(): string
    {
        return "Honda" . PHP_EOL;
    }

    function isMaintance(): bool
    {
        return true . PHP_EOL;
    }
}

$car = new Avanza();
$car->drive();
echo $car->getTire();
echo $car->getBrand();
echo $car->isMaintance();