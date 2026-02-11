<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Abhysta", function (string $name) {
    return strtoupper($name);
});
sayHello("Abhysta", fn (string $name) => strtolower($name));
sayHello("Aby", "strtoupper");
sayHello("Aby", "strtolower");
