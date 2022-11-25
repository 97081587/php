<?php

//quiz
$random = rand(1, 100);

//$invoer = readline("ik heb een willekeurige getal, raad het getal: ");
//echo "Jij gaf het volgende getal: $invoer";

//teller
$teller=1;
$begin=1;
$invoer=101;
//tweede kans + hints
while ($invoer != $random) {
    $invoer = readline("geef een getal tussen 1 en 100: ");
    if ($invoer > $random) {
        echo " het getal is lager.\n";
    }
    if ($invoer < $random) {
        echo " het getal is hoger.\n";
    }

    if ($invoer < 1 || $invoer > 100 || $invoer == "stop") {
        exit("Foute invoer, het antwoord was $random, zie je de volgende keer!");
    }

    
    $teller++;
}

echo "het antwoord was $random, in totaal $teller beurten gedaan, zie je de volgende keer!";
?>