<?php

$klantNummer = readline("Voer een klantnummer in: ");

$nummerLengte = strlen($klantNummer);

$totaal = 0;

// echo $klantNummer . "\n";
// echo $nummerLengte . "\n";

// door klantnummer loop
foreach(str_split($klantNummer) as $cijfer) {
    // echo $klantNummerApart[$i];

    // 0 skippen
    if ($cijfer != '0') {    

        // totaal zonder 0 optellen
            $totaal += (int)$cijfer;

        echo $totaal;

    } 
}

// echo implode('', $klantNummerApart);

?>