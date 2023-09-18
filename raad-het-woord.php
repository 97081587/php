<?php
$array = array("ab","cd");
$rndmwoord = array_rand($array, 1);
$raadwoord = '';

echo "Het woord is: ";
//hier letters tellen van woord en dan in asterisks zetten
$lengte = strlen ($array[$rndmwoord]);
for ($i=1;$i<=$lengte;$i++) {
  echo "*";
}

$teller=0;
//hier dan de loop voor elk letter van de woord
 while ($array[$rndmwoord] != $raadwoord) {
   $letter = readline(" Kies een letter: ");
       if (str_contains($array[$rndmwoord], $letter)) {
            $raadwoord = str_ireplace("*","$letter", "$array[$rndmwoord]");
            echo "Het woord is: $raadwoord \n";
         } else {
            echo "letter $letter komt niet voor in het woord.\n";
         }
      $teller++;
    };

echo "Het woord is: " .$array[$rndmwoord]; echo ", je hebt het geraden in $teller pogingen.\n Wil je nog een keer spelen (ja/nee)";
if ($letter == "ja") {
   return (" ");
} elseif ($letter == "nee") {  
   exit("zie je de volgende keer!");   
}
?>