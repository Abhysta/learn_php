<?php

//dengan loop
function factorialLoop(int $number): int
{
    $total = 1;
    for ($i = 1; $i <= $number; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(10));

//dengan recursive
function factorial(int $number): int
{
    if ($number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

var_dump(factorial(10));

//kode error
// function loop(int $number)
// {
//     if ($number == 0) {
//         echo "Selesai" . PHP_EOL;
//     } else {
//         echo "Loop $number" . PHP_EOL;
//         loop($number - 1);
//     }
// }

// loop(3000000);