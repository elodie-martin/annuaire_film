<?php 

require_once("models/connect_bdd.php");

function getFilm($idFilm) {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT Film.Titre,Film.Sortie,Film.Description,Realisateur.Nom,Realisateur.Prenom,Genre.Themes 
			FROM Film 
			INNER JOIN Liaison_ID_Genre_Film on Liaison_ID_Genre_Film.ID_Film = Film.ID 
			INNER JOIN Genre on Genre.ID = Liaison_ID_Genre_Film.ID_Genre
			INNER JOIN Table_Liaison_ID_Film_Realisateur on Table_Liaison_ID_Film_Realisateur.ID_Film = Film.ID 
			INNER JOIN Realisateur on Realisateur.ID = Table_Liaison_ID_Film_Realisateur.ID_Realisateur
			WHERE ID = { $idFilm }";


	$response = $bdd->prepare( $sql );
    $response->execute();
    $film = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $film;

}

?>