<?php

// implementasi map pada array, key = id, value = Dewa
$semadi = array(
    "id" => "Dewa",
    "name" => "Putu",
    "age" => 19,
);

var_dump($semadi);

// nested array 
$putu = array(
    "id" => "Dewa",
    "name" => "Putu",
    "age" => 19,
    "address" => [
        "city" => "Tabanan",
        "country" => "Indonesia",
    ]
);

var_dump($putu);

?>