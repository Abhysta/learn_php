<?php

class Example
{
    public string|int|array|bool $data;
}

function example(string|int $test)
{
    echo "Hello $test" . PHP_EOL;
}

function example2(string|int $test2): string|int
{
    if (is_string($test2)) {
        return "Ini Str";
    } else {
        return "Ini Int";
    }
}

echo example2(1);
