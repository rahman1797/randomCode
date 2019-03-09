<?php

$word = explode(" ", "mop guh dik mik lip mes guk lut jif vys rot duq jas bet bit gah ret lit mok vup lux zat ruh bif deh max vaf vac lys vit nis nuc bik gax vyp maq gyq jah lyf des nep nex dik bak doc mek mes byh rut jap vax ryt nix nih bot luh jux mef net rat veh nih dip daq luh nuk gyt dac dis lek gat dix jak gef jis bit mes jok rex ryk vax biq voq vup rof buq vuc zok gek gif naq muc nyq vuq vox nit box nys vox gex vaf vat beh jyx zix mif gak nup vis vyc rah gop rot jyc bek zox dah gyt gec lih mef voc vut dih nip get goq vet rit dux lix byp dux gok lop mox vyx niq zep joq jof nox jih dox mot mux reh myf dut rat jyf veh ruq gec jat zep muf met ryh nux vak lyh nuc lyk reh vox nih vup vuk rik lah let jyp jyk dyk jik dac mip vyh roh dus req nyc gex lyf nyt gyp ric jaf dyh lik mak zec zok neh nax vuk dyc jix jes vuf beh bup def buf dyp nik lip vak zuh vep jix jek dyp jus gec dop buk jex rex vex bes geq nus nef las dif boh nyq jix dip duq jic ryp vep bif roh doq gix nuh lif lyh zux nyh duf bup ziq guf goc vaf vic gac jot lot jic muf nic ret dux zaf jot moh mox vys nyq mix zix mus byx rut jof juc mep dit vyf rek leh moh veh zyc bih lic nep rof rif buf beq gux vyf dus gyt geh zop def vek lut mut nex voh vaq bas end");

$array = [];

foreach(array_count_values($word) as $string => $count)
    {

    if($count > 1) {
        $array[] = $string;
    }
}

sort($array);

for ($i=0; $i < count($array) ; $i++) { 
    echo $array[$i]." ";
}


?>