<?php

$coordinat = [

    [0,0,0,0,0,0,0,0],  //a
    [0,0,0,'K',0,0,0,'Q'],  //b
    [0,0,0,0,0,0,0,0],  //c
    [0,'Q',0,0,0,0,0,0],  //d
    [0,0,0,0,0,0,'Q',0],  //e
    [0,0,0,0,0,0,0,0],  //f
    [0,0,0,'Q',0,0,0,0],  //g
    [0,0,0,0,0,0,0,0],  //h
  //[1,2,3,4,5,6,7,8]
];

$a = 0;
$b = 1;
$c = 2;
$d = 3;
$e = 4;
$f = 5;
$g = 6;
$h = 7;

//echo $coordinat[$b][4-1];

 $array = [
    [
        [$e,1], [$c,8]],
    [
        [$c,6], [$f,1]],
    [
        [$c,3], [$c,4]],
    [
        [$g,5], [$f,7]],
    [
        [$f,1], [$d,2]],
    [
        [$a,3], [$h,1]],
    [
        [$e,4], [$a,4]],
    [
        [$c,7], [$f,7]],
    [
        [$g,1], [$g,2]],
    [
        [$f,5], [$b,8]],
    [
        [$g,5], [$d,5]],
    [
        [$a,1], [$c,6]],
    [
        [$b,6], [$h,2]],
    [
        [$a,8], [$b,5]],
    [
        [$d,2], [$a,6]],
    [
        [$a,7], [$e,7]],
    [
        [$g,4], [$a,4]],
    [
        [$h,2], [$d,6]],
    [
        [$g,7], [$c,8]],
    [
        [$h,5], [$f,1]],
    [
        [$c,5], [$b,4]],
    [
        [$e,4], [$a,8]]
 ];

 //echo $array[0][0][1];

for ($i=0; $i < count($array) ; $i++) {
    $x[0] = 0;
    $x[1] = 0;
    for ($j=0; $j < count($array[$i]) ; $j++) { 
         $abj = $array[$i][$j][0];
         $num = $array[$i][$j][1];
         $x[$j] = $coordinat[$abj][$num-1];         
     } 

     $res[$i] = $x[0].$x[1];
    
     
     
//echo $res[$i]."__";
if ($res[$i] == "KQ") {
    echo "Y ";
}
else {
    echo "N ";
}
     //echo $coordinat[$abj][$num];
    
}





?>