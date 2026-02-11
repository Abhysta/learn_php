<?php

function sum(int $first, int $second)
{
    return $first + $second;
}

$total = sum(10, 20);
var_dump($total);

//
function getFinalValue(int $value)
{
    if ($value >= 88) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$finalValue = getFinalValue(90);
var_dump($finalValue);

//return type declaration
function sum2(int $first, int $second): int
{
    return $first + $second;
}

$total2 = sum2(10, "20");
var_dump($total2);

function getFinalValue2($value): string
{
    if ($value >= 88) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$finalValue2 = getFinalValue2(70);
var_dump($finalValue2);