<?php
$VergelijkNummer = fopen('kleinste-getal10.txt', 'r');
$regels = [];
$HoofdNummer = "";

//stopt bij de honderd
for ($i=0;$i<10;$i++) {
    $Regel = fgets($VergelijkNummer);
    echo $Regel;
    if($HoofdNummer === "") {
        $HoofdNummer = $Regel; // Zet de eerste regel als hoofdnummer
    }

    //checkt of de regel niet leeg is
    if ($Regel !== false) {
        //van alle regels naar een regel
        $regels[] = $Regel;
    }


    if ($HoofdNummer <= $Regel) {
        $HoofdNummer === $Regel;
        // echo $HoofdNummer;
        // $i++;
    } elseif ($HoofdNummer >= $Regel) {
        // echo $HoofdNummer;
        //   $i++;
    } 
}

fclose($VergelijkNummer); 

// foreach ($regels as $Regel) {
    // echo $Regel;
    // if ($HoofdNummer < $Regel) {
    //     $HoofdNummer = $Regel;
        // echo $HoofdNummer;
        // echo $Regel;
    // } elseif ($HoofdNummer > $Regel) {
    //       $i++;
    // } 
    // echo $Regel;
// }

?>