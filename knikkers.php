<?php
// geef knikkers
$invoer = readline("geef aantal knikkers die in de zak zitten: ");

//limiet
if ($invoer < 1 || $invoer > 20 ||!is_int($invoer*1)) {
    exit("je moet gehele getallen kiezen tussen 1 en 20 knikkers");
}

//knikker teller
$begin=1;
for ($teller=$begin;$teller<=$invoer;$teller++) {
    $knikkers=$invoer-$teller;
    echo $teller." knikkers opgegooid, nog ".$knikkers." in mijn zak.\n";
}
?>