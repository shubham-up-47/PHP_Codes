<?php
// The var_dump() function is used to dump information about a variable.

// array di php dinamis, bisa digabung antara int, float, string, dll -> kayak tuple di python
$values = array (1,2,3,4,5,6,7,8,9,8,5,'Cek');
var_dump($values);

$names = ["Dewa", "Putu", "Semadi"];
var_dump($names);

// menimpa array index ke-0
$names[0] = "Desak";
var_dump($names);

// menghapus data pada posisi ke-3
unset($names[3]);
// menghitung total data dalam array
count($names); 

?>