<?php
$banaan = array("b", "a", "n", "a", "a", "n");
$appel = array("a", "p", "p", "e", "l");
$tos = array("t", "o", "s");
$megaarray = array($appel, $banaan, $tos);
$rndmwoord = array_rand($megaarray, 1);

$teller=0;
//moet nog letter detectie en woord in asterisks.
echo "Het woord is: \n";
$letter = readline("Kies een letter: ");
  while ($letter != $megaarray) { // loop is ook beetje kapot
       if (array_search(" ", $megaarray, true)) {
            echo "Het woord is: \n";
          }
       if (array_search(" ", $megaarray)) {
            echo "letter $letter komt niet voor in het woord.\n";
          }
      $teller++;
    };

echo "Het woord is: $rndmwoord, je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (ja/nee)";
if ($letter == "ja") {
  header("Refresh:0");
}
if ($letter == "nee") {  
  exit("zie je de volgende keer!");   
}
?>