<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");
$tekst="21";

echo "Hallo $naam \n";

if ($leeftijd < $tekst) {
    echo "Jij bent jonger dan $tekst jaar. \n";
}
if ($leeftijd > $tekst) {
    echo "Jij bent ouder dan $tekst jaar.\n";
}
if ($leeftijd == $tekst) {
    echo "Jij bent precies $tekst jaar.\n";
}