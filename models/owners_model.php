<?php 

require_once("models/connect_bdd.php");

function getOwners() {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT Film.Titre,Realisateur.Nom,Realisateur.Prenom FROM Film 
	INNER JOIN Table_Liaison_ID_Film_Realisateur on Table_Liaison_ID_Film_Realisateur.ID_Film = Film.ID 
	INNER JOIN Realisateur on Realisateur.ID = Table_Liaison_ID_Film_Realisateur.ID_Realisateur 
	ORDER BY Nom";
	$response = $bdd->prepare( $sql );
    $response->execute();
    $owners = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $owners;

}

?>