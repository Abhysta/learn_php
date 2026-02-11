<?php

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Aby");
sayHello("Huda");

//default value
function sayHi($name = "Abhysta")
{
    echo "Hello $name" . PHP_EOL;
}
sayHi();

//kesalahan default value
// function sayHi2($name = "Abhysta", $age)
// {
//     echo "Hello $name : $age" . PHP_EOL;
// }
// sayHi2(22); //error karena default value ditempatkan pada parameter 1 sedangkan terdapat parameter lainnya
// //sehingga jika hanya ingin input value parameter2 dst maka akan error karena harus memasukkan value parameter1 juga

//type declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10");
sum(true, false);
// sum([], []);

//variable length argument list
function sumAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "Total : " . implode(",", $numbers) . " = $total" . PHP_EOL;
}

sumAll(10, 10, 10, 10);
sumAll(...[10, 20, 30, 50]);
