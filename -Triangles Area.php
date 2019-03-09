<?php

$array = [

[7433, 2590, 7840, 1030, 7235, 5380],
[7456, 8408, 7162, 374, 1802, 5912],
[3129, 1784, 1565, 2202, 9310, 1758],
[7606, 1374, 3115, 3575, 4127, 3315],
[8369, 1701, 8014, 4807, 8287, 8153],
[2934, 5719, 742, 774, 6748, 7976],
[6154, 4204, 6383, 3315, 4578, 8185],
[9227, 7706, 9968, 791, 9908, 9277],
[2549, 7514, 651, 5664, 1088, 4777],
[8978, 9457, 6478, 6991, 4264, 4764],
[5144, 7197, 483, 5886, 7970, 7230],
[3862, 4124, 1434, 245, 7439, 6011],
[8429, 6665, 3717, 8396, 7456, 3624],
[7673, 4, 1137, 8323, 5667, 2225],
[3100, 4645, 1682, 9578, 1635, 5945],
[4341, 6779, 3142, 4823, 2664, 1112],
[2053, 6525, 5235, 3486, 6769, 2673]

 //A       //B      //C
];

for ($i=0; $i < count($array) ; $i++) { 
    
    $formula = ($array[$i][0]*($array[$i][3] - $array[$i][5]) + $array[$i][2]*($array[$i][5]  - $array[$i][1]) + $array[$i][4]*($array[$i][1] - $array[$i][3])) / 2;
    
    $area = abs($formula);
    echo $area. " ";

}

?>