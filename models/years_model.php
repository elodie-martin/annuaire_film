<?php 

require_once("models/connect_bdd.php");

function getYears() {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT * FROM Film";
	$response = $bdd->prepare( $sql );
    $response->execute();
    $years = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $years;

}

?>