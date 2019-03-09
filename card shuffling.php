<?php

$input = explode(" ", "78 969 9233 76 234 58 6544 3971 862 4271 7952 8378 620 706 97 46 7513 672 8719 27 75 102 468 838 30 5 100 6082 246 94 39 950 96 819 477 9348 4501 20 5376 25 3061 94 19 909 856 6550 25 393 22 3 6 719");

// echo count($input);
// print_r($input);
$ranks =  ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'T', 'J', 'Q', 'K'];
$suits =  ['C', 'D', 'H', 'S'];

$rand = [];
$deck = [];

for ($i=0; $i < count($input) ; $i++) { 
    $suit = $suits[floor($i/13)];
    $rank = $ranks[$i % 13];
    $deck[$i] = $suit.$rank;
    $range = $input[$i] % 52;
    array_push($rand, $range);
}

for ($i=0; $i < count($input); $i++) { 
    $temp = $deck[$i];
    $deck[$i] = $deck[$rand[$i]];
    $deck[$rand[$i]] = $temp;
    //echo $deck[$i];
}

$res = implode(" ", $deck);
echo $res;

?>