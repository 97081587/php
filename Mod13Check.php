<?php
//prefix
$prefix = '2401160930';

//10 klantnummers genereren
for ($i = 0; $i < 10; $i++) {

    //   mod 13 check
    do {
        // willekeurige 4 cijferige nummer genereren
        $randEndNr = rand(1000, 9999);

        // hele klantnummer combo
        $klantnummer= $prefix . $randEndNr;

    } while ($klantnummer % 13 !== 0);

    echo "Het gegenereerde geldige klantnummer is: " . $klantnummer . "\n";
}
?>  