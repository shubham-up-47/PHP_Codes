<?php

function sum(int $num1, int $num2) : int{
    return $num1 + $num2;
}

echo sum(100,100) . PHP_EOL;

// variable-length argument list -> intinya parameter bisa nerima banyak value

function sumAll(...$values) : string {
    $total = 0;
    foreach($values as $value)
        $total += $value;
    return $total;
}

echo sumAll(1,2,3,4,5,5,6,100,100) . PHP_EOL;
var_dump(sumAll(1,2,3,3,4));


// arrow function
$firstname = "dewa";
$lastname = "semadi";

$sayHello = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $sayHello();