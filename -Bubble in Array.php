<?php

$array = [7133, 75, 67, 9,3089, 7 ,974, 15467, 43, 36, 55, 6285 ,21028, 17965, 141, 220, 90721, 21745, 35, 3 ,15 ,9 ,0 ,4, 319, 7866, 48351, 730, 2378, 17553, 44, 23, 37, 925, 519, 75, 2408];
$arrayLock = $array;

$countPass = 0;
$count = 0;
// $sorted = false;

    // $sorted = true;
    $countPass++;
    for ($i=0; $i < count($array)-1; $i++) { 
        
        if($array[$i] > $array[$i + 1] )
                {   
                    list($array[$i+1], $array[$i]) = [$array[$i], $array[$i+1]];
                    // $sorted = false;
                    $count++;
                }
               
    }


// echo implode(" ", $array)."<p>";
// echo $countPass." ";
echo ($count)." ";

//print_r($array)."<br>";
// print_r($arrayLock);

$limit = 10000007;
$seed = 113;
$result = 0;
for ($i=0; $i < count($array); $i++) { 
    $result = ($result + $array[$i]) * $seed;

    if ($result > $limit) {
        $result = $result % $limit;
    }  
   
}

 echo $result;


?>