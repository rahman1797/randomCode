
<?php

$sum = explode(" ", "13607226 21318754 17026482 14743474 23176784 15750868 14819650 18413298");

// echo $sum[0];
    //Eucliad   
    // a = m^2 - n^2
    // b = 2mn
    // c = m^2 + n^2

for ($i=0; $i < count($sum) ; $i++) { 
     $real_C = sqrt($sum[$i]);

        //m > n > 0
        for ($n = 1; $n < $real_C; $n++) {

            for ($m = ($n+1); $m < $real_C; $m++) {

                $a = $m*$m - $n*$n;
                $b = 2*$m*$n;
                $c = $m*$m + $n*$n;
                
                if ( ($a + $b + $c) == $sum[$i] ) {
                    echo pow($c, 2)." ";
                }
            }
        }
}
    
   

?>