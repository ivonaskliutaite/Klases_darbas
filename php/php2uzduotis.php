<?php
echo '2. Parašyti skriptą kuris apskaičiuos ir atvaizduos vidutinę temperatūrą, penkias žemiausias ir aukščiausias temperatūras.
Registruota temperatūra: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
';

$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

foreach ($temp as $dienosTemp) {
    $suma += $dienosTemp;
}

$vidurkis = $suma / count($temp);
    echo "Vidutie temperatura: " .  $vidurkis;
