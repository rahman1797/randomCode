
<?php

function primecheck($N) {

    if ($N == 2) {
        return 1;
    }

    if (($N % 2) == 0) {
        // echo "Bukan Prima";
        return 0;
    }

    $sqrt = sqrt($N);

    for ($i=3; $i <= $sqrt  ; $i++) { 
        if ($N % $i == 0) {
            // echo "Bukan Prima";
            return 0;
        }
    }

    return 1;

}

$N = 2754500;

$array = [];
$count = 0;


    for ($i=1; $i <= $N ; $i += 1) { 
     
      if (primecheck($i) == 1) {
          $count++;  
          array_push($array, $i);
      }
    }

$array[0] = 2;

$search = [160196, 174558, 145862, 121520, 118704, 190946, 102865, 180622, 184278];
//echo count($array);
 for ($cek=0; $cek < count($search) ; $cek++) { 
       echo $array[($search[$cek])]." " ;
 }


?>