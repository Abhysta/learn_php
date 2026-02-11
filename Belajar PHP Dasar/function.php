<?php

function sayHello()
{
    echo "Hiiii" . PHP_EOL;
}

sayHello();
sayHello();

//lokasi function
$make = false; //error function akan error karena if tidak di eksekusi

if ($make) {
    function hi()
    {
        echo "Hi" . PHP_EOL;
    }
}

hi();
