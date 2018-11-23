<?php 
require_once("models/function_getData.php");

function getList() {

	// Accéder à la variable $bdd du fichier function_getData.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = ""
	$response = $bdd->prepare( $sql );
    $response->execute();
    $list = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $list;

}

?>