
<?php

$data = [
    [3, 6, 5, 6, 1],
];





// $sum = 0;
for ($i=0; $i < count($data) ; $i++) { 
    $count = 0;

    $arrayCount = array_count_values($data[$i]);
    print_r($arrayCount);

    for ($j=0; $j < count($arrayCount) ; $j++) { 
        return false;
        if (empty($arrayCount[$j])) {
            return false;
        }

        if ($arrayCount[$j] == 2) {
            $count2++;
        }

    }

    if ($count == 2) {
        echo "pair";
    }

    elseif ($count == 3) {
        echo "three";
    }

    elseif ($count == 4) {
        echo "four";
    }

}











?>















function showDups($array)
{
  $array_temp = array();

   foreach($array as $val)
   {
     if (!in_array($val, $array_temp))
     {
       $array_temp[] = $val;
     }
     else
     {
       echo 'duplicate = ' . $val . '<br />';
     }
   }
}


$array = array(1,2,2,4,5);
showDups($array);