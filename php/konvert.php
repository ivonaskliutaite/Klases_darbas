<?php
const KMTOMYLES = 0.621371;
const KGTOPOUND = 2.2;
const FARENHEITTOC = 1.8;
function km2myles(int|float $ka): float {
    return $ka * KMTOMYLES;
}
function myles2km(int|float $ka): float {
    return $ka / KMTOMYLES;
}
function ctof(int|float $temp): float {
    return $temp * FARENHEITTOC + 32;
}
function ftoc(int|float $temp): float {
    return ($temp - 32) * 5/9;
}
function kg2pound(int|float $sver): float {
    return $sver * KGTOPOUND;
}
function pound2kg(int|float $sver): float {
    return $sver / KGTOPOUND;
}

