<?php

$array = [
    [-621, -46046, 305, 23404],
    [-414, -37101, -771, -69588],
    [-83, 985, -634, 2087],
    [99, 9563, 467, 41579],
    [407, 20688, -648, -35227],
    [884, -4964, 446, -2336],
    [-806, -79951, -709, -70445],
    [941, -21780, -487, 12492],
    [817, 26282, 245, 7406],
    [473, 41501, -126, -11810],
    [240, -19089, -902, 68845],
    [565, -37950, 870, -58080],
    [-778, 41985, 396, -21411],
    [-157, 9783, -701, 46775]
];

for ($i=0; $i < count($array) ; $i++) { 
        $x1 = $array[$i][0];
        $y1 = $array[$i][1];
        $x2 = $array[$i][2];
        $y2 = $array[$i][3];

        $a = ($y1 - $y2) / ($x1 - $x2);

        $b = $y1 - ($a * $x1);    

     echo "(" . $a . " " . $b . ") ";
}

      
?>