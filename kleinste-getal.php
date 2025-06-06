<?php
$VergelijkNummer = fopen('kleinste-getal.txt', 'r');
$regels = [];
$HoofdNummer = " ";

//stopt bij de honderd en end of file
for ($i=0;$i<100 && !feof($VergelijkNummer);$i++) {
    $Regel = fgets($VergelijkNummer);
    // echo $Regel; 

    // if ($Regel !== false) {
        $regels[] = $Regel;
    // }
}

fclose($VergelijkNummer);

// echo $Regel;

foreach ($regels as $Regel) {
        if ($HoofdNummer < $Regel) {
        $HoofdNummer = $Regel;
        echo $HoofdNummer;
    } 
    // echo $Regel;
}

?>