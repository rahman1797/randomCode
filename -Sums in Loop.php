<?php

$array = [

[617410, 633739],
[669331, 237859],
[585832, 61101],
[799804, 851520],
[874543, 52343],
[423207, 835246],
[769077, 539120],
[458780, 154700],
[380212, 867155],
[993561, 203790],
[384761, 693759],
[894349, 546461]

];

for ($i=0; $i < count($array) ; $i++) { 
    $result = $array[$i][0] + $array[$i][1]; 
    echo $result." ";
}




?>