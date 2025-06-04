<?php

$VergelijkNummer = file_get_contents('kleinste-getal.txt');
// echo $VergelijkNummer; 

$HoofdNummer = 0;

if ($HoofdNummer < $VergelijkNummer) {
    $HoofdNummer = $VergelijkNummer;
    echo $HoofdNummer;
}

?>