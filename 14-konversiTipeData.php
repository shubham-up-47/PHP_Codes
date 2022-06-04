<?php

// PHP_EOL is a string constant that represents the correct end of line symbol for the platform that you are running php on


$valueString = (string)100;
var_dump($valueString);
echo "$valueString[0]\n";

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"20.3";
var_dump($valueFloat);

// curly brace
echo "this is float data type: ${valueFloat}\n";

?>