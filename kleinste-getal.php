<?php

    // 100 willekeurige nummers
    $vergelijknummer = array("774", "581", "117", "668", "692", "616", "915", "366", "194", "708",
    "362", "307", "197", "318", "638", "93", "139", "730", "283", "880",
    "128", "851", "448", "63", "274", "384", "84", "776", "674", "381",
    "659", "808", "814", "122", "666", "629", "189", "584", "972", "679",
    "390", "412", "321", "644", "33", "672", "446", "993", "143", "75",
    "96", "971", "352", "348", "797", "963", "589", "752", "763", "575",
    "109", "23", "782", "487", "151", "195", "15", "74", "927", "614",
    "490", "443", "470", "297", "191", "41", "700", "945", "841", "705",
    "66", "342", "387", "924", "504", "640", "906", "241", "665", "333",
    "512", "266", "799", "858", "874", "750", "456", "795", "593", "611");


    // voor als er meer dan 100 nummers zijn
    $lengte = count($vergelijknummer);

    // user input?
    $hoofdnummer = 500;

    for ($i=0;$i<$lengte;$i++) {
        // echo "$vergelijknummer[$i] test \n";

        //vergelijken met de hoofdnummer
            //alle kleine getallen moeten naar de 1000 gaan en waarvan de meeste getallen zijn toegevoegd, is het kleinste getal.
            if ($vergelijknummer[$i] < $hoofdnummer) {
                $RestNummer = 1000 - $vergelijknummer[$i];
                // echo "$RestNummer \n";
                if ($RestNummer > $.. ) {
                    // echo "$RestNummer \n";

                    // hier gaat de kleinste getal terug naar beginwaarde.
                    $ResultaatNummer = 1000 - $RestNummer;
                    echo "$ResultaatNummer Is het kleinste getal \n";
                }              
            } 
            // voor als de hoofdnummer kleiner is dan het vergelijknummer, deze zijn niet de kleinste getallen.
            // else if ($vergelijknummer[$i] > $hoofdnummer) {
            //     echo "Dit is geen kleine getal. \n";
            // };
    };
    
?>