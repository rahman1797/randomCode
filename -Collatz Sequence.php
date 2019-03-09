<?php

$data = [189, 47, 198 ,13, 25063 ,4846, 12, 1918, 237, 16, 213, 37407 ,211 ,120 ,491 ,35, 173, 3699, 3733, 29440, 32, 2373, 710, 47245];

for ($i=0; $i < count($data) ; $i++) { 
    $count = 0;
    $Xnext = $data[$i];
    while ($data[$i] != 1) {
        $data[$i] = $Xnext;

        if (($data[$i] % 2) == 0) {
            $Xnext = $data[$i] / 2;
            $count++;
        }

        else{
            $Xnext = (3 * $data[$i]) + 1;
            $count++;
        }

    }
    echo ($count-1)." ";

}



?>