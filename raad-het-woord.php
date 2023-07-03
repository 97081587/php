<?php
$letter = readline('');
$rij = array("peer","appel", "banaan");
$rndmwoord =array_rand($rij);

$teller=1;


    echo 'Het woord is: ';
    $letter = readline('Kies een letter: \n');
        if (stripos($rndmwoord, $letter) ==false) {
            echo "letter $letter komt niet voor in het woord.";
        } else {
             $teller++;
            echo "Het woord is: $rndmwoord, je hebt het graden in $teller pogingen.";
        } 
 
?>