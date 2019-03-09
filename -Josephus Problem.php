<?php

function f($N,$K){

    if ($N == 1) {
        return 1;
    }
    else {
        return ((f($N - 1, $K) + $K - 1) % $N) + 1; 
    }
}

 $a = [61,6];
 $N = $a[0];
 $K = $a[1];

echo f($N, $K);


?> 