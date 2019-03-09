<?php

$input = [

explode(' ','RS RP RP PS SP PP SS RS SS RR RP'),
explode(' ','SR RR SP SS PP RR SS PP PS RR SR RS SR'),
explode(' ','SR PR RP PR PR SP PP PS PR RS'),
explode(' ','RR RS RP PS PP SP RR PS PP RS PP PR RR PP RP RP PP PP SR'),
explode(' ','RP RP SP RP SP SS RR RR RR SS PR SS SP'),
explode(' ','PR RS RS'),
explode(' ','SP PS RP PS RP'),
explode(' ','PS RP PS SS SS SR SP PR PS SP PP RP'),
explode(' ','SS PR PR PP PS RP SR PP SS PR RP PS'),
explode(' ','RP RP SP RS SR PR SS SS SP PS SR'),
explode(' ','SS RS PP SS SR SR SP PS PS RS PS PR SS SS SR'),
explode(' ','PS PP RR RR SR RR RS SR RP'),
explode(' ','SS RP RS PR PR'),
explode(' ','SS SP RR PR RP PP SS RP SR'),
explode(' ','SR SR PR SS RP'),
explode(' ','PP SP SS PP RS RS'),
explode(' ','RP PP RP PR SP RR SR RR PR PS'),
explode(' ','SS SP RS RP SP PR SR PP PS RR RP RR PR SP'),
explode(' ','SP SP RR SR PR SR SR RS PP PR SS RP SP'),
explode(' ','SR PS SS PP RS RR RP SP RR PS PR RS SS RR SP RP SP'),
explode(' ','SP SR PS PS RS SP SS SS RS'),
explode(' ','RS RR RS SR PP SS PR'),
explode(' ','PS PR PP SR SS SS PR PP RR SR RP SP SP RS'),
explode(' ','PP PR SP PR PS RR PS SP RP PP RS SP'),
explode(' ','PP RP RR RP PR PR SS SP SR RP SS SP PP SR'),
explode(' ','PS SS SP RS PP PP RS PS PR'),
explode(' ','SP RS RS RP RS'),
explode(' ','PR RP RR SR SR SP SS RR PS PR PS'),
explode(' ','PS RP PR PR SS PP RP')

];


for ($i=0; $i < count($input) ; $i++) { 
    $p1 = 0;
    $p2 = 0;
    for ($j=0; $j < count($input[$i]) ; $j++) { 
        if ($input[$i][$j] == 'RS' || $input[$i][$j] == 'SP' || $input[$i][$j] == 'PR') {
            $p1++;
        }
        elseif ($input[$i][$j] == 'SS' || $input[$i][$j] == 'PP' || $input[$i][$j] == 'RR') {
            # code...
        }
        else {
            $p2++;
        }
    }

    if ($p1 > $p2) {
        echo '1 ';
    }
    else{
        echo '2 ';
    }
    // echo $p1." ";
    // echo $p2 ."<p>";
}

?>