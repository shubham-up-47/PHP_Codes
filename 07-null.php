<?php
// null untuk mengosongkan variable

$age = 20;
$age = NULL; // variable tanpa nilai NULL atau null

echo "Age: $age\n";

echo "Is age null?: ";
var_dump(is_null($age));

// isset -> cek apakah sebuah variabel ada dan nilainya tidak null
var_dump(isset($age));

?>