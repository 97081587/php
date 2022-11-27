<?php
//geef leeftijd
$invoer = readline("geef leeftijd: ");

//stop
if ($invoer < 9 || $invoer > 118) {
    exit("te oud/te jong");
}

// felicitaties
$teller=1;
$maximum=1;
while ( $teller <= $maximum && $invoer == 10 ||$teller <= $maximum && $invoer == 16 || $teller <= $maximum && $invoer == 18|| $teller <= $maximum && $invoer == 50 || $teller <= $maximum && $invoer == 67 || $teller <= $maximum && $invoer == 100) {
        echo "gefeliciteerd!\n";
        $teller++;  
}

// waarschuwing
if ($invoer == 62) {
     echo "het duurt nog 5 jaar voordat je 67 bent.";
}
?>