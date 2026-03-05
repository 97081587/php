<?php

// $klantNummer = readline("Voer een klantnummer in: ");
$array = str_split(readline("Voer een klantnummer in: "));

// $array = str_split($klantNummer);
// print_r($array);

// skipt de 0 / vervangt de 0 met een lege string
$zonderNullen = str_replace('0', '', $array);

//maakt er een string van
$ZonderNullenString = implode('', $zonderNullen);

echo "Zonder nullen: " . $ZonderNullenString . "\n";

$totaal = 0;

// while ($array) {

foreach (str_split($ZonderNullenString) as $cijfer) {
    // alle losse cijfers optellen en in totaal zetten
    $totaal += (int)$cijfer;
}

// mod 13 check
if ($totaal % 13 === 0) {
    echo "Het klantnummer is geldig.\n";
} else {
    echo "Het klantnummer is ongeldig.\n";
}

// }
?>