<?php

$input = [

[627955013, 1107333165, 272922269],
[274490615, 1896365797, 398481443],
[560123826, 1270167325, 327582529],
[382408572 ,1820536142, 289907803],
[371594338, 1196840126, 298876307],
[466484537, 1400901123, 352279391],
[838762582, 1184962007, 224568143],
[852541728, 1890049929, 224737787],
[264545923, 1524923672, 299060903],
[586942930, 1794601167, 269682059],
[262618210, 1548098361, 298944257],
[981347251, 1028584680, 213582997],
[919920946 ,1628436250, 298944257],
[370002503, 1036619308, 311239939],
[717176106, 1351325506, 343269737],
[101063427, 1266109948, 213598267],
[648628254, 1817937553, 271050379],
[430416887, 1689434315, 272874247],
[569013263, 1460145592, 289874969],
[978483117, 1428877999, 387940979],
[729781580, 1848372197, 271648397],
[855181241 ,1333353889, 213626969],
[522435011, 1420147773, 273113803],
[479748596, 1048853075, 168903151],
[141991246, 1917482322, 319162897],
[954112677, 1753410284, 219020071],
[309592488, 1315526756, 388061801],
[139127638, 1041247516, 271648397],
[410536231, 1166552361, 351852547]

];


for ($i=0; $i < count($input) ; $i++) { 
    $a = $input[$i][0];
    $b = $input[$i][1];
    $m = $input[$i][2];
    echo bcpowmod($a, $b, $m), " ";
}


?>