<?php

// null coalescing menggunakan syntax: ??
// gunanya buat ngecek variabel apakah null apa enggak

$data;
$action = $data ?? 'nothing\n';

echo $action;