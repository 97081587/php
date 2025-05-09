<?php
    // 100 tot 1
    // $vergelijknummer = array("100", "99", "98", "97", "96", "95", "94", "93", "92", "91",
    // "90", "89", "88", "87", "86", "85", "84", "83", "82", "81",
    // "80", "79", "78", "77", "76", "75", "74", "73", "72", "71",
    // "70", "69", "68", "67", "66", "65", "64", "63", "62", "61",
    // "60", "59", "58", "57", "56", "55", "54", "53", "52", "51",
    // "50", "49", "48", "47", "46", "45", "44", "43", "42", "41",
    // "40", "39", "38", "37", "36", "35", "34", "33", "32", "31",
    // "30", "29", "28", "27", "26", "25", "24", "23", "22", "21",
    // "20", "19", "18", "17", "16", "15", "14", "13", "12", "11",
    // "10", "9", "8", "7", "6", "5", "4", "3", "2", "1");

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
    $hoofdnummer = 101;

    //loopt een voor een door de nummer array
    for ($i=0;$i<$lengte;$i++) {
        // echo "$vergelijknummer[$i] test \n";

        //vergelijken met de hoofdnummer
        // while ($vergelijknummer[$i] !== $hoofdnummer) {
            if ($vergelijknummer[$i] < $hoofdnummer) {
                // echo "-1 test \n";
                $HNummerMinVNummer = $hoofdnummer - $vergelijknummer[$i];
                echo "$HNummerMinVNummer \n";
            } 
            // voor als de hoofdnummer kleiner is dan het vergelijknummer
            else if ($vergelijknummer[$i] > $hoofdnummer) {
                // echo "+1 test \n";
                $HNummerPlusVNummer = $hoofdnummer + $vergelijknummer[$i];
                echo "$HNummerPlusVNummer \n";
            };
        // };

        // if($hoofdnummer === $vergelijknummer[$i] ) {
        //     echo "$hoofdnummer Is het kleinste getal";
        // };
    };
    
?>