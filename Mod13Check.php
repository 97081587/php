<?php

$klantNummer = readline("Voer een klantnummer in: ");

$klantNummerApart = str_split($klantNummer);

$nummerLengte = strlen($klantNummer);

// echo $klantNummer . "\n";
// echo $klantNummerApart[$i] . "\n";
// echo $nummerLengte . "\n";

// door klantnummer loop
for ($i = 0; $i < count($klantNummerApart); $i++) {
    // echo $klantNummerApart[$i];

    // 0 skippen
    if ($klantNummerApart[$i] > 0) {    
        // echo $klantNummerApart[$i] . "\n";

        // totaal zonder 0 optellen
        for ($j = $i; $j < count($klantNummerApart); $j++) {
            echo $klantNummerApart[$i];
        }

        // echo implode('', $klantNummerApart);
        
        
        // echo $nummerLengte . "\n";

    } 
}

// echo implode('', $klantNummerApart);

?>