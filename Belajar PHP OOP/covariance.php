<?php

use Data\Anjing;
use Data\Hewan;
use Data\Kucing;

interface AnimalShelter
{
    function adopt(string $name): Hewan;
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Anjing
    {
        $dog = new Anjing();
        $dog->name = $name;
        return $dog;
    }
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Kucing
    {
        $cat = new Kucing();
        $cat->name = $name;
        return $cat;
    }
}