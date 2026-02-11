<?php

//tanpa ternary
$gender = "PRIA";

$hi = null;
if ($gender == "PRIA") {
    $hi = "Hi Bro";
} else {
    $hi = "Hi Sis";
}

echo $hi . PHP_EOL;

//dengan ternary
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Sis";
echo $hi . PHP_EOL;