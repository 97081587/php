<?php
$letter ='';
$rij = array("peer", "appel", "banaan");
$rndmwoord =array_rand($rij, 3);

$teller=1;

echo "Het woord is: \n";
while ($letter !== $rij[$rndmwoord[0]]) {   
    $letter = readline("Kies een letter: \n");
     if (stripos($rij[$rndmwoord[0]], $letter) ==false) {
            echo "Het woord is: \n";
        } else {
          echo "letter $letter komt niet voor in het woord.\n";
        }
    $teller++;
}
echo "Het woord is:" .$rij[$rndmword[0]],", je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (j/n)";
if ($letter == "n"){  exit();
}
?>