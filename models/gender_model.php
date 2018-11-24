
<?php 

require_once("models/connect_bdd.php");

// RETOURNE LE(S) GENRE(S) ET LEURS ID EN FONCTION DE L'ID DU FILM
function getGenderIdOfFilm($filmId) { 

	global $bdd;

	$sql = "SELECT Genre.Themes, Genre.ID
			FROM Film 
			INNER JOIN Liaison_ID_Genre_Film on Liaison_ID_Genre_Film.ID_Film = Film.ID 
			INNER JOIN Genre on Genre.ID = Liaison_ID_Genre_Film.ID_Genre 
			WHERE Film.ID = :filmId";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':filmId', $filmId, PDO::PARAM_STR);
    $response->execute();
    $gender = $response->fetchAll(PDO::FETCH_ASSOC);

    return $gender;
}

// RETOURNE TOUT LES FILMS QUI ONT LE GENRE ID PASSER EN PARAMETRE
function getFilmsByGender($genderId) {
	
	global $bdd;

	// Va chercher tout les films qui ont le genre ID suivant...
	$sql = "SELECT Film.Titre,Film.Sortie,Film.Description,Realisateur.Nom,Realisateur.Prenom,Genre.Themes 
			FROM Film 
			INNER JOIN Liaison_ID_Genre_Film on Liaison_ID_Genre_Film.ID_Film = Film.ID
			INNER JOIN Genre on Genre.ID = Liaison_ID_Genre_Film.ID_Genre 
			INNER JOIN Table_Liaison_ID_Film_Realisateur on Table_Liaison_ID_Film_Realisateur.ID_Film = Film.ID 
			INNER JOIN Realisateur on Realisateur.ID = Table_Liaison_ID_Film_Realisateur.ID_Realisateur
			WHERE Genre.ID = :genderId";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':genderId', $genderId, PDO::PARAM_STR);
    $response->execute();
    $films = $response->fetchAll(PDO::FETCH_ASSOC);

    return $films;
}

?>


