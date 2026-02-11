<?php

abstract class Location
{
    public string $name;
}

class City extends Location
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
