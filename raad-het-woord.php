<?php
$banaan = "banaan";
$appel = "appel";
$zit = "zit";
$megaarray = array($appel, $banaan, $zit);
$rndmwoord = array_rand($megaarray, 1);

$teller=0;
//hier letters tellen van woord en dan in asterisks zetten
echo strlen($rndmwoord);
 if ($rndmwoord > 0) {
  echo str_replace($rndmwoord, "*", $rndmwoord);
 }
echo "het woord is: \n";
//hier dan de loop voor elk letter van de woord
$letter = readline("Kies een letter: ");
  while ($letter != $megaarray) {
       if (array_search("1", $megaarray, true)) {
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

}
if ($letter == "nee") {  
  exit("zie je de volgende keer!");   
}
?>