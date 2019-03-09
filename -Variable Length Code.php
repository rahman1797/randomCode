<?php

$string = explode(" ", "n o t  b e  c h a n g e d  f o r  l i g h t  a n d  t r a n s i e n t  c a u s e s  a n d  a c c o r d i n g l y  a l l  c o n s a n g u i n i t y  ! w e  m u s t  t h e r e f o r e  a c q u i e s c e  i n  t h e  n e c e s s i t y  w h i c h  d e n o u n c e s  o u r  f o r m i d a b l e  t o  t y r a n t s  o n l y  ! h e  h a s  c a l l e d  t o g e t h e r  l e g i s l a t i v e  b o d i e s  a t");

// print_r($string);
$array = [];

for ($i=0; $i < count($string); $i++) { 
  if ($string[$i] == "") {
    array_push($array, '11');
  }
  elseif ($string[$i] == "t") {
    array_push($array, '1001');
  }
  elseif ($string[$i] == "n") {
    array_push($array, '10000');
  }
  elseif ($string[$i] == "s") {
    array_push($array, '0101');
  }
  elseif ($string[$i] == "r") {
    array_push($array, '01000');
  }
  elseif ($string[$i] == "d") {
    array_push($array, '00101');
  }
  elseif ($string[$i] == "!") {
    array_push($array, '001000');
  }
  elseif ($string[$i] == "c") {
    array_push($array, '000101');
  }
  elseif ($string[$i] == "m") {
    array_push($array, '000011');
  }
  elseif ($string[$i] == "g") {
    array_push($array, '0000100');
  }
  elseif ($string[$i] == "b") {
    array_push($array, '0000010');
  }
  elseif ($string[$i] == "v") {
    array_push($array, '00000001');
  }
  elseif ($string[$i] == "k") {
    array_push($array, '0000000001');
  }
  elseif ($string[$i] == "q") {
    array_push($array, '000000000001');
  }
  elseif ($string[$i] == "e") {
    array_push($array, '101');
  }
  elseif ($string[$i] == "o") {
    array_push($array, '10001');
  }
  elseif ($string[$i] == "a") {
    array_push($array, '011');
  }
  elseif ($string[$i] == "i") {
    array_push($array, '01001');
  }
  elseif ($string[$i] == "h") {
    array_push($array, '0011');
  }
  elseif ($string[$i] == "l") {
    array_push($array, '001001');
  }
  elseif ($string[$i] == "u") {
    array_push($array, '00011');
  }
  elseif ($string[$i] == "f") {
    array_push($array, '000100');
  }
  elseif ($string[$i] == "p") {
    array_push($array, '0000101');
  }
  elseif ($string[$i] == "w") {
    array_push($array, '0000011');
  }
  elseif ($string[$i] == "y") {
    array_push($array, '0000001');
  }
  elseif ($string[$i] == "j") {
    array_push($array, '000000001');
  }
  elseif ($string[$i] == "x") {
    array_push($array, '00000000001');
  }
  elseif ($string[$i] == "z") {
    array_push($array, '000000000000');
  }
}

// print_r($array);

$array = implode("", $array);
$array = str_split($array,8);

// print_r($array);

$hex = [];

for ($i=0; $i < count($array) ; $i++) { 
  if (strlen($array[$i]) != 8) {
    $array[$i] = str_pad($array[$i], 8, '0', STR_PAD_RIGHT);
  }

  array_push($hex, base_convert($array[$i], 2, 16));
}

// print_r($hex);

for ($i=0; $i < count($hex) ; $i++) { 
  if (strlen($hex[$i]) != 2) {
    $hex[$i] = str_pad($hex[$i], 2, '0', STR_PAD_LEFT);
  }
  echo strtoupper($hex[$i])." ";
}

// String imap_8bit ( $array );

// for ($i=0; $i < count($array) ; $i++) { 
  
// }


?>