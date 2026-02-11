<?php

$name = "Aby";

$otherName = &$name;
$otherName = "Huda";

echo "Hello $name" . PHP_EOL;

function addCount(int &$value)
{
    $value++;
}
$counter = 0;
addCount($counter);
echo "Counter : $counter" . PHP_EOL;

//returning
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = getValue();
echo "Value : $b" . PHP_EOL;