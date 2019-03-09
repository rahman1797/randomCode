<?php 

$a = [
    [23, 7],
  
];

for ($i=0; $i < count($a) ; $i++) { 
    
    $a_lock = $a[$i][0];
    $b_lock = $a[$i][1];

    $a_val = $a[$i][0];
    $b_val = $a[$i][1];

     while ($a_val != $b_val) {        

        if ($a_val > $b_val) {
        
              $a_val = $a_val - $b_val;
              $b = [$a_val,$b_val];
             // echo $a_val." ";
          }

        if ($b_val > $a_val) {
     
              $b_val = $b_val - $a_val;
              $b = [$a_val,$b_val];
              //echo $b_val."<p>"; 
          }  


    }

    $x = ($a_lock*$b_lock) / $a_val; 
    echo "(".$a_val." ". $x .")"." ";

}


?>

