<?php

$array = [

[377288893, 1787820124],
[516975892, 2040308463],
[1967487181, 804038896],
[1418211767, 1310453893],
[859675002, 2065854518],
[1052568418, 21793201],
[124675874, 1638083129],
[2038916008, 1211795687],
[1646135321, 421052379],
[116588587, 918875602],
[1604141509, 2026220102],
[831293938, 35501401],
[850847437, 874734022],
[1445477391, 696600459],
[1193567537, 121324321],
[827370449, 1287348522],
[1435040337, 1124062890],
[1123645495, 1958875832],
[147249370, 345040255],
[1494305758, 1115311125],
[1424565517, 732622843],
[1666755376, 1435947371],
[1970851890, 127808158],
[887768568, 743109368],
[425382456, 447069706],
[1065747927, 431210506]
];


for ($i=0; $i < count($array) ; $i++) { 
    $result = ($array[$i][0]%6) + ($array[$i][1]%6);    
    echo ($result + 2)." ";
}

?>