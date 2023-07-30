<?php
$banaan = array("b"=>"1", "a"=>"2", "n"=>"3", "a"=>"4", "a"=>"5", "n"=>"6");
$appel = array("a"=>"1", "p"=>"2", "p"=>"3", "e"=>"4", "l"=>"5");
$tos = array("t"=>"1", "o"=>"3", "s"=>"3");
$megaarray = array($appel, $banaan, $tos);
$rndmwoord = array_rand($megaarray, 1);// array in array werkt niet haha

$teller=0;
//moet nog letter detectie en woord in asterisks.
echo "Het woord is: \n";
$letter = readline("Kies een letter: ");
  while ($letter != $megaarray) { // loop is ook beetje kapot
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
  header("Refresh:0");
}
if ($letter == "nee") {  
  exit("zie je de volgende keer!");   
}
?>