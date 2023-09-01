<?php
$array = array("appel","banaan","fruit");
$rndmwoord = array_rand($array, 1);

$teller=0;
//hier letters tellen van woord en dan in asterisks zetten
if (strlen($rndmwoord) == 5) {
  $geheimewoord5 = "*****";
  echo "het woord is: " .$geheimewoord5;
}
if (strlen($rndmwoord) == 6) {
  $geheimewoord6 = "******";
  echo "het woord is: " .$geheimewoord6;
}
 

//hier dan de loop voor elk letter van de woord
$letter = readline("Kies een letter: ");
  while ( ) {
       if (array_search("1", $array, true)) {
            echo "Het woord is: \n";
          }
       if (array_search(" ", $array)) {
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