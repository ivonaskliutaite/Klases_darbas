<?php
echo '1. Sukurti PHP skriptą kuris atvaizduotų valstybių sostines ir pačias valstybes. <br>';

$ceu = [
"Italy" => "Rome",
"Luxembourg" => "Luxembourg",
"Belgium" => "Brussels",
"Denmark" => "Copenhagen",
"Finland" => "Helsinki",
"France" => "Paris",
"Slovakia" => "Bratislava",
"Slovenia" => "Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland" => "Dublin",
"Netherlands" => "Amsterdam",
"Portugal" => "Lisbon",
"Spain" => "Madrid",
"Sweden" => "Stockholm",
"United Kingdom" => "London",
"Cyprus" => "Nicosia",
"Lithuania" => "Vilnius",
"Czech Republic" => "Prague",
"Estonia" => "Tallin",
"Hungary" => "Budapest",
"Latvia" => "Riga",
"Malta" => "Valetta",
"Austria" => "Vienna",
"Poland" => "Warsaw",
];

echo 'a. Nerikiuotus duomenis ir atspausdinti <br>';

//foreach ($ceu as $salis => $sostine) {
  //  echo $salis. ' sostine yra '. $sostine .'. <br><br>';
//}

//echo 'b. Surikiuoti šalis abėcėlės tvarka ir atspausdinti.<br>';

//asort($ceu); //surikiuojam array pagal key (salis) nuo a iki z
//foreach ($ceu as $salis => $sostine) { //isskaidom array salis ir sostine
  //  echo $salis. ' sostine yra '. $sostine .'. <br><br>'; //atspausdinam vaizdziai
//}
//die();

//asort($ceu); //surikiuojam array pagal key (salis) nuo a iki z
//foreach ($i=0, $iMax = count($ceu), $i <$iMax, $i+=4) {

  //  $salis = array_keys($ceu)[$i];
  //  $value  = $ceu[$salis]
 //   echo $salis. ' sostine yra '. $sostine .'. <br><br>';
//}




//echo 'c. Spausdinti kas $x -tąjį masyvo elementą. <br>';
//sort($ceu); // rusiuojame masyva
//$ilgis = count($ceu); // issiaskiname masyvo ilgi (elementu skaiciu)
//for($x = 0; $x < $ilgis; $x++) { // skaiciavimas prasideda nuo 1 elemento, elementas neturi buti mazesnis negu startinis elementas, didiname +1 elementa
//    echo $ceu[$x] . '<br>';
//}

echo 'd. Visus variantus kurie turi raidę $char = “A”; (Case sensitive) <br>';
foreach ($ceu as $salis => $sostine) {
    if (
        str_contains($salis, 'A')|| str_contains($sostine, 'A')
    ) {echo $salis . ' = ' . $sostine . "\n";}
}




