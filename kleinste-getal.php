<?php
$VergelijkNummer = fopen('kleinste-getal.txt', 'r');
$regels = [];
$HoofdNummer = '';

//stopt bij de honderd en end of file
for ($i=0;$i<100 && !feof($VergelijkNummer);$i++) {
    $Regel = fgets($VergelijkNummer);
    // echo $Regel; 

    //checkt of de regel niet leeg is
    if ($Regel !== false) {
        //van alle regels naar een regel
        $regels[] = $Regel;
    }
}

fclose($VergelijkNummer); 

// foreach ($regels as $Regel) {
    // echo $Regel;
    if ($HoofdNummer < $Regel) {
        $HoofdNummer = $Regel;
        echo $HoofdNummer;
    }
    elseif ($HoofdNummer > $Regel) {
        $HoofdNummer != $Regel;
        echo $HoofdNummer;
    } 
    // echo $Regel;
// }

?>