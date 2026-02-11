<?php

//global scope

// $name = "Abhysta";

function sayName()
{
    // echo $name; //error
}

sayName();


//local scope

// function createName()
// {
//     $name = "Abhysta";
// }
// createName();
// echo $name;

//global keyword

// $name = "Abhysta";

// function sayNameGlobal()
// {
//     global $name;
//     echo $name;
// }

// sayNameGlobal();

//$GLOBAL variable

$name = "Abhysta";

function sayNameGlobal()
{
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}

sayNameGlobal();

//static scope

function staticScope()
{

    static $counter = 1;

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

staticScope();
staticScope();
staticScope();