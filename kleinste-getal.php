<?php
$VergelijkNummer = fopen('kleinste-getal.txt', 'r');
$HoofdNummer = " ";

//stopt bij de honderd en end of file
for ($i=0;$i<100 && !feof($VergelijkNummer);$i++) {
    $Regel = fgets($VergelijkNummer);
    // echo $Regel; 

    if ($HoofdNummer < $Regel) {
        $HoofdNummer = $Regel;
        echo $HoofdNummer;
    } 
}

fclose($VergelijkNummer);

?>