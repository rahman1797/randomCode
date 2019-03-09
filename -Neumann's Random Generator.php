<?php

$data = [7457, 2312, 8313, 1855, 6068, 3544, 9388, 6733, 278, 1687, 7735, 9737, 4591, 6239];

for ($i=0; $i < count($data) ; $i++) { 
    $a = $data[$i];
    $aLock = $a;
    $b = 0;
    $count = 0;
    $array = [];
    while (true) {
    $a = $a;
    $count++;
    $b = $a*$a;
    $a = $b/100;
    $a = $a%10000;


    if ($a == $aLock ) {
        break;
    }
    if (in_array($a, $array)) {
        break;
    }

    $array[$count] = $a;
    }
    echo $count." ";
}

?>