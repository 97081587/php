<?php

// $VergelijkNummer = file_get_contents('kleinste-getal.txt');

$VergelijkNummer = fopen('kleinste-getal.txt', 'r');
$EersteRegel = fgets($VergelijkNummer);
fclose($VergelijkNummer);

// echo $EersteRegel; 

$HoofdNummer = 0;

if ($HoofdNummer < $EersteRegel) {
    $HoofdNummer = $EersteRegel;
    echo $HoofdNummer;
}

?>