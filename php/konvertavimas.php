<?php

include 'konvert.php';
function konvertuoti(int|float $ka, string $kaip): float {
    switch ($kaip) {
        case 'mylios';
        $ats = km2myles($ka);
            break;
        case 'kilometrai';
        $ats = myles2km($ka);
            break;
        case 'kg';
        $ats = kg2pound($ka);
            break;
        case 'svarai';
        $ats = pound2kg($ka);
            break;
        case 'celsijus';
            $ats = ctof($ka);
            break;
        case 'farenheit';
            $ats = ftoc($ka);
            break;
        default;
        throw new Exception('Nesuprantamas formatas');
    }
    return $ats;
}
