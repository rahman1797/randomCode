<?php 
$a = [
    [93, 86],
    [119, 112],
    [74, 66],
    [109, 102],
    [55, 9],
    [102, 95],
    [74, 66],
    [116, 7],
    [118, 111]
];

for ($z=0; $z < count($a); $z++) { 
    $NK = $a[$z][0] - $a[$z][1];
    $n = 1;
    $nk = 1;
    $k = 1;

    for ($i=0; $i < $a[$z][0] ; $i++) {     
        $n = $n * (1+$i) ;   
    }

    for ($j=0; $j < $NK ; $j++) {     
        $nk = $nk * (1+$j) ;   
    }

    for ($l=0; $l < $a[$z][1] ; $l++) {     
        $k = $k * (1+$l) ;   
    }

   echo $c = $n / ($k * $nk)." " ;

}

?>