<?php

function skaitytiFailas(string $filePath, string $option = 'r') {
    return fopen($filePath, $option);
}

function printFile($manoFailas, $kiek): void {
    echo fread($manoFailas, $kiek);
    fclose($manoFailas);
}

function redaguotiFaila ($failas, $duomenys): void{
    fwrite($failas, $duomenys);
}