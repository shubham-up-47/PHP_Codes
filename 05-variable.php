<?php
// di php, tipe data saat deklarasi tidak diperhatikan
$name = "Semadi";
$age = "19";

echo "Name: $name\n";
echo "Age: $age\n";

// variable variables
$name2 = "Putu";
$$name2 = "Keren";

echo "Name2: $name2\n";

?>