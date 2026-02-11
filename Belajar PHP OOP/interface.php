<?php

namespace Data;

interface Car
{
    function drive(): void;

    function getTire(): int;
}

// class Avanza extends Manager implements Car{}

class Avanza implements Car
{
    function drive(): void
    {
        echo "Jalan" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }
}
