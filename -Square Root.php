<?php

$a = [
    [41798, 2],
    [176, 1],
    [746, 1],
    [30, 9],
    [93688, 6],
    [17, 9],
    [74, 13],
    [62, 4],
    [368, 4],
    [2112, 12],
    [161, 5],
    [5258, 7]
];

for ($Narray=0; $Narray < count($a) ; $Narray++) { 
    for ($i = 0; $i < count($a[$Narray]); $i++) {
    $r = 1;
    $X = $a[$Narray][0];
    $N = $a[$Narray][1];

     for ($j = 0; $j < $N; $j++) {
        $d = $X / $r;
        $r = ($r + $d) / 2;
     }
            
    }

    echo $r." ";
}

?>