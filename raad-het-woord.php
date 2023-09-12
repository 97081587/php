<?php
$array = array("leerling","cirkel","eend","veiligheidsspeld","taart","arend","verkoper","dier","goed","ballonnen","borstel","pen","koffie","knie","kast");
$rndmwoord = array_rand($array, 1);

echo "Het woord is: ";
//hier letters tellen van woord en dan in asterisks zetten
$lengte = strlen ($array[$rndmwoord]);
$raadwoord = '';
for ($i=1;$i<=$lengte;$i++) {
  echo "*";
}

$teller=1;
$begin=1;
//hier dan de loop voor elk letter van de woord
$letter = readline(" Kies een letter: ");
  while ($array[$rndmwoord] != $raadwoord) {
       if (str_contains($array[$rndmwoord], $letter)) {
             echo "Het woord is: $raadwoord \n";
          } else {
             echo "letter $letter komt niet voor in het woord.\n";
          }
      $teller++;
    };

echo "Het woord is: " .$array[$rndmwoord]; echo ", je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (ja/nee)";
if ($letter == "ja") {
   echo "ja";
} elseif ($letter == "nee") {  
   exit("zie je de volgende keer!");   
}
?>