<?php
//prefix
$prefix = '2401160930';

//10 klantnummers genereren
for ($i = 0; $i < 10; $i++) {
    $randEndNr = rand(1000, 9999);

    // hele klantnummer combo
    $klantnummer= $prefix . $randEndNr;

    echo "Het gegenereerde klantnummer is: " . $klantnummer . "\n";

    //   mod 13 check
    while ($klantnummer % 13 == 0){       
        
    }   

        // if ($klantnummer % 13 === 0) {
        //     echo "Het klantnummer " . $klantnummer . " is geldig.\n";
        // } elseif ($klantnummer % 13 !== 0) {
        //     echo "Het klantnummer " . $klantnummer . " is ongeldig.\n";

        // } 
}
?>  