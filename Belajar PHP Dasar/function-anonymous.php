<?php

$sayHello = function (string $myName) {
    echo "Hello $myName" . PHP_EOL;
};


$sayHello("Aby");

//anonymous sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBye("Aby", function (string $name) {
    return strtoupper($name);
});

//mengakses variable di luar
$firstName = "Abhysta";
$lastName = "Huda";

$sayHelloAby = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAby();
