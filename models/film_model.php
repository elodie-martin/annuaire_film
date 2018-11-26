<?php 

require_once("models/connect_bdd.php");

function getFilmById($idFilm) {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT Film.Titre,Film.Sortie,Film.Description,Realisateur.Nom,Realisateur.Prenom, 
			GROUP_CONCAT(Genre.ID) AS genreId,
			GROUP_CONCAT(Genre.Themes) AS genreTheme
			FROM Film 
			INNER JOIN Liaison_ID_Genre_Film ON Liaison_ID_Genre_Film.ID_Film = Film.ID 
			INNER JOIN Genre ON Genre.ID = Liaison_ID_Genre_Film.ID_Genre
			INNER JOIN Table_Liaison_ID_Film_Realisateur ON Table_Liaison_ID_Film_Realisateur.ID_Film = Film.ID 
			INNER JOIN Realisateur ON Realisateur.ID = Table_Liaison_ID_Film_Realisateur.ID_Realisateur
			WHERE Film.ID = :idFilm";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':idFilm', $idFilm, PDO::PARAM_STR);
    $response->execute();
    $film = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
	return $film[0];

}


// Donne toute la liste des films (nom, ID) (pour home_controller.php)
function getListOfAllFilms() {

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