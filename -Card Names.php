<?php

$suits = ['Clubs', 'Spades', 'Diamonds', 'Hearts'];
$ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

$card_value = ['41', '11', '3', '12', '43', '13', '4', '6', '48', '44', '0', '7', '32', '27', '1', '31', '5', '33', '8', '9', '38', '47', '42', '15'];

for ($i=0; $i < count($card_value) ; $i++) { 
    
    $suit[$i] = $card_value[$i] / count($ranks);

    $rank[$i] = $card_value[$i] % count($ranks);
    
    $suit_val[$i] = floor($suit[$i]);

    echo($ranks[$rank[$i]] ."-of-".$suits[$suit[$i]])." ";
    
}


?>