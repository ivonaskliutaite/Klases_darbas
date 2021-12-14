<?php
$myfile = fopen("duomenys.html");
$resursas = fopen('duomenys.html', 'r');
echo fread($myfile);
fclose($myfile, $resursas);

?>