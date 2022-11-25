<?php

$tafel=readline("Welke tafel wil je zien? ");
$begin=15;
$eind=22;

echo "\n\nTafel van $tafel:\n";

for ($teller=$begin;$teller<=$eind;$teller++) {
    $product=$teller*$tafel;
    echo $teller." x ".$tafel." = ".$product."\n";
}

?>