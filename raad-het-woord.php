<?php
$array = array("appel", "banaan", "tos");
$rndmwoord = array_rand($array, 2);

$teller=1;

echo "Het woord is:  \n";
  while ( ) {
      $letter = readline("Kies een letter: \n");
       if ( ) {
            echo "letter $letter komt niet voor in het woord.\n";
          } else {
            echo "Het woord is:  \n";
        }
      if ($letter == "nee") {  
        exit("zie je de volgende keer!")
    $teller++;
  }
;
}
echo "Het woord is:" .[$array[$rndmwoord[1]]],", je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (ja/nee)";
?>