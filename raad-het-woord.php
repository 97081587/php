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
            $letterpos = strpos($array[$rndmwoord], $letter);
            $raadwoord  = substr_replace($raadwoord,$letter,$letterpos, 0);
             echo "Het woord is: ";
            for ($i=1;$i<=$lengte;$i++) {
               echo "*";
             }
       } else {
         echo "letter $letter komt niet voor in het woord.\n";
      }
      $teller++;
   };

echo "\n Het woord is: " .$array[$rndmwoord]; echo ", je hebt het geraden in $teller pogingen.\n Wil je nog een keer spelen (ja/nee)";
if ($letter == "nee") {  
   exit("zie je de volgende keer!");   
}
?>