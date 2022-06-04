<?php

echo "Decimal: ";
var_dump(1234);

echo "Floating point: ";
var_dump(12.3);

echo "Floating point with E Notation plus: ";
var_dump(12E4);

echo "Floating point with E Notation minus: ";
var_dump(12E-4);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(1011);

echo "Underscore in number: ";
var_dump(1_234_567);

echo "Integer overflow 32-bit: ";
var_dump(2147483647);

// saat melebihi kapasitas int di 64-bit, maka bilangan akan di casting menjadi float
echo "Integer overflow 64-bit: ";
var_dump(92233720368547758071);

?>