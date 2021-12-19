<?php
//skaitysim fail'o turini ir ji atspausdinsime

$kiek = filesize('naujaspuslapis.html');
$atidarytihtml = fopen("naujaspuslapis.html", "r");
echo fread($atidarytihtml, $kiek);
fclose($atidarytihtml);