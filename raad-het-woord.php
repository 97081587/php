<?php
$letter ='';
$rij = array("peer", "appel", "banaan");
$rndmwoord =array_rand($rij, 2);

$teller=1;

while ($letter !== $rndmwoord) {
    echo "Het woord is: \n";
    $letter = readline("Kies een letter: \n");
        if (stripos($rij[$rndmwoord[1]], $letter) ==false) {
            echo "letter $letter komt niet voor in het woord.\n";
        }
        $teller++;
    }
    echo "Het woord is: ";
    echo $rij[$rndmwoord[2]];
    echo "je hebt het geraden in $teller pogingen.";
?>