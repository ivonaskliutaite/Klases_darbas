<?php

$kiek = filesize('duomenys.html');
$resursas = fopen('duomenys.html', 'r');

$kas = fread($resursas, $kiek);
$manoVardas = 'Ivona';

echo preg_replace("/pasauli/", $manoVardas, $kas);

fclose($resursas);
