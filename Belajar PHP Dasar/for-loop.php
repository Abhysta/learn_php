<?php

$counter = 1;

//perulangan kondisi
for (; $counter <= 10;) {
    echo "Hello For Loop 1 : " . $counter . PHP_EOL;
    $counter++;
}
//perulangan dengan init statement
for ($counter = 1; $counter <= 10;) {
    echo "Hello For Loop 2 : " . $counter . PHP_EOL;
    $counter++;
}
//perulangan post statement
for ($counter; $counter <= 10; $counter++) {
    echo "Hello For Loop 3 : " . $counter . PHP_EOL;
}

//syntax alternatif
for ($counter; $counter <= 10; $counter++) :
    echo "Hello For Loop 4 : " . $counter . PHP_EOL;
endfor;