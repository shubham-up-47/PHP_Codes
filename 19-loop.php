<?php

// for(initial state; condition; update state)
// infinite loop
// for(;;) echo "something";

for($counter = 1; $counter <=10; $counter++)
    echo "${counter}\n";

// while loop
$count = 0;
while($count <= 10){
    echo "${count}\n";
    $count++;
}

// for each
$names = ["I", "Dewa", "Putu", "Semadi"];

foreach($names as $name)
    echo "Hello ${name}\n";


