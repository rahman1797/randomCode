<?php

$array = [519, 610, 713, 805, 245, 662, 47, 848, 91, 132, 569, 385, 285, 475, 755, 431, 339, 187];

$arrayLock = $array;

$sorted = false;
while ($sorted == false) {
    $sorted = true;
    for ($i=0; $i < count($array)-1; $i++) { 
        
        if($array[$i] > $array[$i + 1] )
                {   
                    list($array[$i+1], $array[$i]) = [$array[$i], $array[$i+1]];
                    $sorted = false;
                }
    }
}

$sortedArray = implode(" ", $array)."<p>";

// print_r($array);

for ($j=0; $j < count($array); $j++) { 
    $index = array_search($array[$j], $arrayLock);
    echo ($index+1)." ";
}




?>