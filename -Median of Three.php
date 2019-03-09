<?php

$a = array(
array(804, 789, 798),
array(386, 423, 382),
array(74, 124, 80),
array(888, 573, 366),
array(3, 136, 17),
array(917, 975, 60),
array(541, 770, 1143),
array(1125, 1127, 691),
array(59, 56, 674),
array(9, 306, 11),
array(1855, 305, 1116),
array(565, 40, 474),
array(100, 81, 79),
array(965, 4, 991),
array(61, 143, 64),
array(5, 13, 89),
array(20, 6, 16),
array(37, 33, 129),
array(114, 7, 94),
array(999, 86, 1052)
);

for ($i=0; $i < 20; $i++) {
	$max = max($a[$i]);
	$min = min($a[$i]);

	for ($j=0; $j < 3 ; $j++) { 
		if ($a[$i][$j] > $min && $a[$i][$j] < $max ) {
				echo $a[$i][$j]." ";
			}	
	}
}


?>