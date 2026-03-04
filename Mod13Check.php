<?php

$klantNummer = readline("Voer een klantnummer in: ");

$zonderNullen = str_replace('0', '', $klantNummer);

$totaal = 0;

foreach (str_split($zonderNullen) as $cijfer) {
    $totaal += (int)$cijfer;
}

if ($totaal % 13 === 0) {
    echo "Het klantnummer is geldig.\n";
} else {
    echo "Het klantnummer is ongeldig.\n";
}

?>