<?php

$consonant = explode(" ", 'b c d f g h j k l m n p r s t v w x z');
$vowel     = explode(" ", 'a e i o u');

function LCG($A,$C,$M,$Xo,$N) {

        $Xcur = $Xo;
        for ($i=0; $i < $N ; $i++) { 
            
            $Xnex = ($A * $Xcur + $C) % $M; 

            $Xcur = $Xnex;
        }
        return $Xcur;
    
}

$x = [7, 3, 4, 4, 7, 7, 6, 6, 7, 4, 6, 7, 3, 4, 4, 8, 8, 6, 5];
$cuy = 1636052;
$count = array_sum($x);
$num = $count;
$array = [];

    for ($i=1; $i <= $num  ; $i++) { 
       
       $input = [$i,$cuy];
       $LGC = LCG(445, 700001, 2097152, $input[1], $input[0]);
       array_push($array, $LGC );
       
    }

    // print_r($array);
    // echo "<p>";

// echo count($array); 
$check = 0;
$check1 = 0;     


for ($l=0; $l < count($x) ; $l++) { 

    for ($j=0; $j < $x[$l] ; $j++) { 
        // echo "|||".$check1."|||";
         if ($j % 2 == 0) {
             $letterIndex = $array[$j+$check1] % 19;
             // echo $letterIndex."<br>";
             echo $consonant[$letterIndex] ."";
             $check++;
         }

         if ($j % 2 == 1) {
             $letterIndex = $array[$j+$check1] % 5;
             // echo $letterIndex."<br>";  
             echo $vowel[$letterIndex].""; 
             $check++;
         }

         
    }

    $check1 = $check1 + $x[$l];
    echo " ";

//   echo $check1 = ($check1 + $x[$l]);
}

// echo "<p>";
// $g = [214123,23123,4,2];
// array_splice($g, 4);
// print_r($g);
   
// echo "<p>";
// echo $consonant[706902 % 19];
// echo $vowel[809880 % 5];
// echo "<P>";
// print_r($array);

 

?>