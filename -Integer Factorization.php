
<?php

$data = [734728455631,
103247779139,
757183517647,
166396340963,
5822817866909,
2504223521011,
22027164347,
5669339255549,
995138009519,
254101418591,
270233531119,
64179658271,
743869158577,
49525681319,
165984199943,
27131526287,
619487030861,
315350535671,
3431371645033,
840773859253,
3993995620051,
215373610687,
3898900488437,
36530152171,
4540876833979,
1280093195959,
6270205354579,
219881848339,
389018747647
];


for ($iter=0; $iter < count($data); $iter++) { 
    
    $array = [];

    for ($i=2; $i <= $data[$iter]   ; $i++) { 
        
        while ($data[$iter] % $i == 0)  {
            array_push($array, $i);
            $data[$iter] = $data[$iter] / $i;
        }
    }

    if (count($array) == 0) {
            array_push($array, $data[$iter]);
        }

    for ($j=0; $j < count($array) ; $j++) { 
        if ($j == (count($array)-1) ) {
            echo $array[$j]." ";
        }
        else {
            echo $array[$j]."*";
        }
        
    }
}
    


?>