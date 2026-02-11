<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}
function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionFoo = "foo";
$functionFoo();

$functionBar = "bar";
$functionBar();

//pengunaan lebih kompleks
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Abhysta", "sampleFunction");
sayHello("Abhysta", "strtoupper");
sayHello("Abhysta", "strtolower");