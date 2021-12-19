<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uzduotis</title>
</head>
<body>

<?php
//include 'matematika.php';
//include 'duomenuisvedimas.php';
//include 'konvertavimas.php';
//include 'fs.php';

//$x = 5;
//$y = 6;

//spausdintiTeksta('Kintamuju x ir y  sudetis:');
//spausdintiTeksta(sudetis($x, $y));

//spausdintiTeksta('Kintamuju x ir y  atimtis:');
//spausdintiTeksta(atimtis($x, $y));

//$mas = ['jonas' => 15, 'keistas' =>22, 'petras' => 'Petrinis'];
//spausdintiTeksta("Masyvas: ");
//spausdintiHtml($mas);
//spausdintiHtml($mas, 'mano');



//echo "<br>";
//echo "100 km myliomis : " . km2myles(100, 'mylios');
//echo "<br>";
//echo "62.1371 myliu km : " . myles2km(62.1371, 'km');
//echo "<br>";
//echo "100 kg svarais : " . kg2pound(100, 'kg');
//echo "<br>";
//echo "220 svarais kg : " . pound2kg(220, 'svarai');
//echo "<br>";
//echo "36,6 laipsniai farenheitu : " . ctof(36.6, 'celsijus');
//echo "<br>";
//echo "97, 88 farenheitu i c : " . ftoc(97.88, 'farenheit');
//echo "<br>";

require_once 'fs.php';

//echo "Failo skaitymas";

$manoFailas = 'sablonas.html';

$resursas = skaitytiFailas($manoFailas, 'w+');

redaguotiFaila($resursas, 'Mano naujas tekstas');

$data = 'Mano naujas tekstas.';
fwrite($resursas, $data);

$kiek = filesize($manoFailas);
printFile($resursas, $kiek);

copy($manoFailas, 'mano_failas.html');


?>
</body>
</html>
