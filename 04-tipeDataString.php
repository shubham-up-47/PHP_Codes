<?php

// single quote untuk membuat string
echo 'Nama: ';
var_dump('I Dewa Putu Semadi');
echo "\n";

echo "Nama: ";
echo "I\t Dewa\t Putu\t Semadi\n";
//enscape sequence
// \t --> tab
// \n --> newline

echo <<<PUTU
Multi line ------
Ini adalah contoh string yang sangat panjang, dan gak perlu 
ketik ENTER, cara ke-3 membuat string bisa menggunakan "heredoc"

PUTU;

echo <<<'PUTU'
Multi line ------
Ini adalah contoh string yang sangat panjang, dan gak perlu 
ketik ENTER, cara ke-3 membuat string bisa menggunakan "nowdoc"

PUTU;

?>