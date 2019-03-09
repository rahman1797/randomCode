<?php

$A= 11;
$T=10;
$J=10;
$K=10;
$Q=10;
$sum = 0;

$a = [
   [3, $Q, 5],
[9, $J],
[8, 2, 3, 4],
[9, $Q],
[8, 7, 9],
[$A, $Q],
[9, $K],
[$J, $A],
[4, 7, 7],
[9, 5, 5],
[2, 9, 7],
[$A, 6],
[$A, 3, 3],
[$A, $Q],
[2, $T, $A, $A, 3],
[4, $K, 4],
[$A, 9],
[6, 2, $K],
[7, $T],
[$K, 2, $A, 7],
[2, $K, 3, 2]
];

for ($i=0; $i < count($a) ; $i++) { 
    $sum = 0;
    for ($j=0; $j < count($a[$i]) ; $j++) { 
         $sum = $sum + $a[$i][$j];

     } 

     if ($sum > 21) {

               $arrayCount = array_count_values($a[$i]);
              // print_r($arrayCount);

               //echo "////".$arrayCount[$A]."////";
             if (empty($arrayCount[$A])) {
                 echo "Bust ";
             }


                 elseif ($arrayCount[$A] == 1) {
                     $sum = $sum - 10;
                     
                     if ($sum >21) {
                         echo "Bust";
                     }
                     else {
                        echo $sum." ";
                     }
                 }

                 elseif ($arrayCount[$A] == 2) {
                     $sum = $sum - 10;
                     
                     if ($sum >21) {
                         echo "Bust ";
                     }
                     else {
                        echo $sum." ";
                     }
                 }

                 elseif ($arrayCount[$A] == 3) {
                     $sum = $sum - 10;
                     
                     if ($sum >21) {
                         echo "Bust ";
                     }
                     else {
                        echo $sum." ";
                     }
                 }

                 elseif ($arrayCount[$A] == 4) {
                     $sum = $sum - 10;
                     
                     if ($sum >21) {
                         echo "Bust ";
                     }
                     else {
                        echo $sum." ";
                     }
                 }

             else {
                echo "Bust ";
             }
         }
         else{
            echo $sum." ";        
         }
    
}

?>