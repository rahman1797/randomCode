<?php 

$array = [9,15, 1776];

for ($i=0; $i < count($array) ; $i++) { 
   $a = str_split($array[$i]);
  

    $b = 0;
    for ($i=0; $i < count($a) ; $i++) { 
        $b= $b + ($a[$i]* ($i+1));

        
    }

echo($b)."_";

}



// for ($i=0; $i < ; $i++) { 
//     # code...
// }

?>