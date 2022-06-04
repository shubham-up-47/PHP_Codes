<?php

$counter = 1; 
while($counter <= 10){
    echo "Count : ${counter}\n";

    if($counter == 10)
        goto end;
    $counter++;
}

end:
echo "End loop\n";