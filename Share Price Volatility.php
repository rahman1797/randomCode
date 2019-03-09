
<?php

$data = [
    ['JOOG', 99, 99, 99, 99, 99, 99 ,99, 101, 101, 101, 101, 101, 101, 101],
    ['GOLD', 95, 105, 95, 105, 95, 105, 95, 105, 95, 105, 95, 105, 95 ,105]
];

$array = [];
// $sum = 0;
for ($j=0; $j < count($data) ; $j++) { 
    $sum = 0;
    
    
    for ($i=1; $i < (count($data[$j])) ; $i++) { 
        $sum += $data[$j][$i];
    }
    array_push($array, $sum);
    // $array = []; 
    //echo $data[$j][0] . $sum . "<br>";
    
 
}

print_r($array);









?>