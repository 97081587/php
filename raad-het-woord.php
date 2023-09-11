<?php
$array = array("appel","banaan","fruit");
$rndmwoord = array_rand($array, 1);

echo "Het woord is: ";
//hier letters tellen van woord en dan in asterisks zetten
$lengte = strlen ($array[$rndmwoord]);
for ($i=0;$i<=$lengte;$i++) {
  echo "*";
}
$raadwoord = "*****";
$teller=1;
$begin=1;
//hier dan de loop voor elk letter van de woord
$letter = readline("Kies een letter: ");
  while ($rndmwoord != $raadwoord) {
       if (($letter == $array[$rndmwoord])) {
             echo "Het woord is: \n";
          } elseif ($letter != $array[$rndmwoord]) {
             echo "letter $letter komt niet voor in het woord.\n";
          }
      $teller++;
    };

echo "Het woord is: $rndmwoord, je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (ja/nee)";
if ($letter == "ja") {
   echo "ja";
} elseif ($letter == "nee") {  
   exit("zie je de volgende keer!");   
}
echo "DEBUG: done";
?>