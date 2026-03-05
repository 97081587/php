<?php
$input = readline("Voer een klantnummer in: ");

// splits de invoer in meerdere klantnummers
$klantnummers = explode(" ", $input);

foreach ($klantnummers as $klantnummer) {

    // skipt de 0 / vervangt de 0 met een lege string
    $zonderNullen = str_replace('0', '', $klantnummer);

    $totaal = 0;
    foreach (str_split($zonderNullen) as $cijfer) {
        // alle losse cijfers optellen en in totaal zetten
        $totaal += (int)$cijfer;
    }

    // mod 13 check
    if ($totaal % 13 === 0) {
        echo "Het klantnummer is geldig.\n";
    } else {
        echo "Het klantnummer is ongeldig.\n";
    }
}
?>