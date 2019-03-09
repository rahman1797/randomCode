<?php

$data = [5000000, 16, 171];

$p = $data[0];
$r = ($data[1]/100) / 12;
$month = $data[2];

$mortgage = $p * $r * pow(1 + $r, $month) / (pow(1 + $r, $month) - 1);

echo ceil($mortgage);

?>