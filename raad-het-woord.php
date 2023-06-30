<?php
$letter = '';
$rndmwoord = array("peel","bmw");

while (stripos($rndmwoord, $lword)) {
    echo 'Het woord is: ';
    $letter = readline('Kies een letter: \n');
if (stripos($rndmwoord, $letter) ==false) {
      echo "letter $letter komt niet voor in het woord.";
    } else {
        echo "Het woord is: $letter ";
        }
    }   
?>