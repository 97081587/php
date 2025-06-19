<?php
$VergelijkNummer = fopen('kleinste-getal.txt', 'r');
$HoofdNummer = "";

// Zet de eerste regel als hoofdnummer
$EersteRegel = fgets($VergelijkNummer);
if($HoofdNummer === "") {
    $HoofdNummer = $EersteRegel; 
}

//stopt bij de honderd en end of file
    for ($i=0;$i<100 && !feof($VergelijkNummer);$i++) {
        $Regel = fgets($VergelijkNummer);
        
        if ($HoofdNummer >= $Regel) {
            $HoofdNummer = $Regel;
        }
    }

fclose($VergelijkNummer); 

echo "Het kleinste getal is: $HoofdNummer \n";
?>