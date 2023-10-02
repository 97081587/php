<?php
$array_woorden = array("abc","def");
$rndmwoord = array_rand($array_woorden, 1);
$raad_letter = '';
$asterisk = '*';
$raad_woord = '';

echo "Het woord is: ";
//hier letters tellen van woord en dan in asterisks zetten
$lengte = strlen ($array_woorden[$rndmwoord]);
for ($i=1;$i<=$lengte;$i++) {
   echo $asterisk;
}
$teller=0;

//hier dan de loop voor elk letter van de woord
 while ($raad_woord != $rndmwoord) {
   $raad_letter = readline(" Kies een letter: ");
   $teller++;
      while (str_contains($array_woorden[$rndmwoord], $raad_letter)) {
         $positie = strpos($array_woorden[$rndmwoord], $raad_letter,0);
         $raad_woord  = substr_replace($raad_woord,$raad_letter,$positie,0);
         echo $raad_woord;
      };
   if ($raad_letter != $array_woorden[$rndmwoord]) {
      echo "letter $raad_letter komt niet voor in het woord.\n";
   }
 };

echo "\n Het woord is: " .$array_woorden[$rndmwoord]; echo ", je hebt het geraden in $teller pogingen.\n Wil je nog een keer spelen (ja/nee)";
 if ($raad_letter == "nee") {  
   exit("zie je de volgende keer!");   
 }
?>