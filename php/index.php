<?php

include 'matematika.php';
include 'duomenuisvedimas.php';
include 'konvertavimas.php';

$x = 5;
$y = 6;

spausdintiTeksta('Kintamuju x ir y  sudetis:');
spausdintiTeksta(sudetis($x, $y));

spausdintiTeksta('Kintamuju x ir y  atimtis:');
spausdintiTeksta(atimtis($x, $y));

$mas = ['jonas' => 15, 'keistas' =>22, 'petras' => 'Petrinis'];
spausdintiTeksta("Masyvas: ");
spausdintiHtml($mas);
spausdintiHtml($mas, 'mano');



echo "<br>";
echo "100 km myliomis : " . km2myles(100, 'mylios');
echo "<br>";
echo "62.1371 myliu km : " . myles2km(62.1371, 'km');
echo "<br>";
echo "100 kg svarais : " . kg2pound(100, 'kg');
echo "<br>";
echo "220 svarais kg : " . pound2kg(220, 'svarai');
echo "<br>";
echo "36,6 laipsniai farenheitu : " . ctof(36.6, 'celsijus');
echo "<br>";
echo "97, 88 farenheitu i c : " . ftoc(97.88, 'farenheit');
echo "<br>";