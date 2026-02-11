<?php 

// var_dump digunakan untuk mengetahui tipe datanya

echo "Decimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(01234);
echo "Hexadecimal : ";
var_dump(0x1234);
echo "Binary : ";
var_dump(0b1010);
echo "Underscore : ";
var_dump(1_234_567);


echo "Floating Point  : ";
var_dump(1.234);
echo "Floating Point dengan e Notation plus (1.2 x 1000) : ";
var_dump(1.2e3);
echo "Floating Point dengan e Notation minus (1.2 x 0.001) : ";
var_dump(1.2e-3);
echo "Underscore floating point : ";
var_dump(1_234.567);

echo "Integer overflow 64 bit : ";
var_dump(9223372036854775808);

echo "cek max integer : ";
var_dump(PHP_INT_MAX);