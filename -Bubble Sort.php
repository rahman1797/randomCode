<?php

$array = [17, 8, 19, 5, 14, 13, 9, 18, 10, 2, 16, 20, 15, 21, 1, 6, 7, 12, 3, 11, 4];

$countPass = 0;
$count = 0;
$sorted = false;
while ($sorted == false) {
    $sorted = true;
    $countPass++;
    for ($i=0; $i < count($array)-1; $i++) { 
        if($array[$i] > $array[$i + 1] )
                {   
                    list($array[$i+1], $array[$i]) = [$array[$i], $array[$i+1]];
                    $sorted = false;
                    $count++;
                }
               
    }
}

// echo implode(" ", $array)."<p>";
echo $countPass." ";
echo $count;


?>