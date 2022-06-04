<?php

// Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument

function sayHello (string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Putu", function ($name) {return strtoupper($name);});
sayHello("Putu", fn($name)=> strtoupper($name));
sayHello("Putu", "strtoupper");
sayHello("Putu", "strtolower");