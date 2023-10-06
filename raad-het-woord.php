<?php
$array_woorden = array("appel","herinneren","combinatie","membraan","tap","stadion,","montuur","zandloper","geeuw","aankondigingen","applaus","vouwen","mail","garnering","schaaldier");
$rndmwoord = array_rand($array_woorden, 1);
$raad_letter = '';
$asterisk = '*';
$raad_woord = '';

echo "Het woord is: ";
//hier letters tellen van woord en dan in asterisks zetten
$lengte = strlen ($array_woorden[$rndmwoord]);
for ($i=1;$i<=$lengte;$i++) {
   $raad_woord = $raad_woord.$asterisk;
   echo $asterisk;
   //$raad_woord.=$asterisk;
}
$teller=0;

//hier elk letter checken
while ($raad_woord != $array_woorden[$rndmwoord]) {
   echo "\n";
   $raad_letter = readline(" Kies een letter: ");
   $raad_letter = strtolower($raad_letter);
   $teller++;
   if (str_contains($array_woorden[$rndmwoord], $raad_letter)) {
      $raad_word_array = str_split($raad_woord);
         foreach (str_split($array_woorden[$rndmwoord]) as $position => $letter) {
            if ($letter === $raad_letter) {
               $raad_word_array[$position] = $raad_letter;
            }
         }
      $raad_woord = implode('', $raad_word_array);
      echo $raad_woord;
   } elseif (str_contains($array_woorden[$rndmwoord], $raad_letter) == false) { 
      echo " letter $raad_letter komt niet voor in het woord.";
   }
}
echo "\n Het woord is " .$array_woorden[$rndmwoord]; echo ", je hebt het geraden in $teller pogingen. \n";
$opnieuw = readline ("Wil je nog een keer spelen (ja/nee): ");
if (strtolower($opnieuw) !== "ja") {  
   exit(" ");   
}
?>