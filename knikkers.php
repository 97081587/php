<?php
// geef knikkers
$invoer = readline("geef aantal knikkers die in de zak zitten: ");

//limiet
if ($invoer < 1 || $invoer > 20) {
    exit("je moet kiezen tussen 1 en 20 knikkers");
}

//knikker teller
$begin=1;
$maximum=$invoer;
for ($teller=$begin;$teller<=$maximum;$teller++) {
    $knikker=$invoer-$teller;
    echo $teller." knikkers opgegooid, nog ".$knikker." in mijn zak.\n";
}
?>