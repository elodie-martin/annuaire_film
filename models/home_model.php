<?php 

require_once("models/connect_bdd.php");

function getList() {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT ID,Titre FROM Film";
	$response = $bdd->prepare( $sql );
    $response->execute();
    $list = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $list;

}

?>