<?php
//Includo il database
include __DIR__ . "/database.php";

header('Content-Type: application/json');

//Se esiste una value "genre" nella richiesta..
if( isset($_GET["genre"]) && $_GET["genre"] != "") {
    //Creo un nuovo array per metterci i risultati filtrati
    $filteredArray = [];

    //Clico tutto il database per trovare gl'elementi con genre uguale a quello chiesto dall'utente
    foreach ($database as $disco) {
        if ( strtolower($disco["genre"]) == strtolower($_GET["genre"]) ){
            //Pusho gl'elementi nell'array nuovo
            $filteredArray[] = $disco;

        }
    }
    //Trasmetto il json
    echo json_encode($filteredArray);

//Oppure
} else {
    //Trasmetto il json senza filtri
    echo json_encode($database);

}


?>
