<?php

include __DIR__ . "/database.php";

header('Content-Type: application/json');


if( isset($_GET["genre"]) && $_GET["genre"] != "") {

    $filteredArray = [];

    foreach ($database as $disco) {
        if ( strtolower($disco["genre"]) == strtolower($_GET["genre"]) ){

            $filteredArray[] = $disco;

        }
    }

    echo json_encode($filteredArray);


} else {

    echo json_encode($database);

}


?>
