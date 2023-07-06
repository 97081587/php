<?php
$array = array("appel", "banaan", "tos");
$rndmwoord = array_rand($array);

$teller=0;
//moet nog letter detectie en woord in asterisks.
echo "Het woord is: \n";
$letter = readline("Kies een letter: ");
  while (// deze moet gaan loopen tot de hele woord is geraden) {
       if (str_contains($rndmwoord, $letter)) {
            echo "Het woord is: \n";
          } else {
            echo "letter $letter komt niet voor in het woord.\n";
        }
      $teller++;
    };

echo "Het woord is: $rndmwoord, je hebt het geraden in $teller pogingen.\n";
echo "Wil je nog een keer spelen (ja/nee)";
if ($letter == "nee") {  
  exit("zie je de volgende keer!");   
}
?>