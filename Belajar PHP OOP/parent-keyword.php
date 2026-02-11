<?php

class Shape
{

    public function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner(): int
    {
        return parent::getCorner();
    }
}

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rec = new Rectangle();
echo $rec->getCorner() . PHP_EOL;
echo $rec->getParentCorner() . PHP_EOL;
