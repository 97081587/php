<?php
//geef leeftijd
$invoer = readline("geef leeftijd: ");

//stop
if ($invoer < 9 || $invoer > 118) {
    exit("te oud/te jong");
}

// felicitaties
if ($invoer == 10 ||$invoer == 16 ||$invoer == 18|| $invoer == 50 || $invoer == 67 ||$invoer == 100) {
        echo "gefeliciteerd!\n"; 
}

// waarschuwing
if ($invoer == 62) {
     echo "WAARSCHUWING: het duurt nog 5 jaar voordat je 67 bent.";
}
?>