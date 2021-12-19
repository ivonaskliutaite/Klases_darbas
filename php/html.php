<?php
// kodas, kuris kurs html fail'a, i ji rasys duomenis
//1. atidarom faila su f-cija fopen, jei direktorijos nera, tada sukuria toki faila
$naujas = fopen("naujaspuslapis.html", "x+") or die ("nera tokio failo");

//2.sukuriam kas turi buti tame faile;
$naujasPuslapis = '
<html>
<head>
<title>Puslapis</title>
</head>
<body>
<p>Labas pasauli!</p>
</body>
</html>';

//3.papildome si fail1a nauju tekstu is auksciau
fwrite($naujas, $naujasPuslapis);