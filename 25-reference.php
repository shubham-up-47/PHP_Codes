<?php

// Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
// mirip seperti pointer di C/C++ tapi konsepnya sedikit berbeda


// assign by reference

$name = "Dewa";
$otherName = $name;
$otherName = "Budi";

echo $name . PHP_EOL;
echo $otherName . PHP_EOL;


// pass by reference
function increment(int &$value){
    $value++;
}

$counter = 1; 
increment($counter);
echo $counter . PHP_EOL;