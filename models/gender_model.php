
<?php 

require_once("models/connect_bdd.php");

// RETOURNE TOUT LES GENRES ET LEURS ID CORRESPONDANT DANS LA BDD
function listGender() {

	global $bdd;

	$sql = "SELECT genre.name, genre.id
			FROM Genre";

	$response = $bdd->prepare( $sql );
    $response->execute();
    $genders = $response->fetchAll(PDO::FETCH_ASSOC);

    return $genders;

}

// RETOURNE LE(S) GENRE(S) ET LEURS ID EN FONCTION DE L'ID DU FILM
function getGenderIdOfFilm($filmId) { 

	global $bdd;

	$sql = "SELECT genre.name, genre.id
			FROM movie 
			INNER JOIN id_movie_genre on id_movie_genre.id_movie = movie.id 
			INNER JOIN genre on genre.id = id_movie_genre.id_genre 
			WHERE movie.id = :filmId";

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
	$sql = "SELECT movie.id, movie.title, movie.releaseDate, movie.description, director.lastname, director.name, genre.name, genre.id
			FROM movie 
			INNER JOIN id_movie_genre on id_movie_genre.id_movie = movie.id
			INNER JOIN genre on genre.id = id_movie_genre.id_genre 
			INNER JOIN id_movie_director on id_movie_director.id_movie = movie.id 
			INNER JOIN director on director.id = id_movie_director.id_director
			WHERE genre.id = :genderId";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':genderId', $genderId, PDO::PARAM_STR);
    $response->execute();
    $films = $response->fetchAll(PDO::FETCH_ASSOC);

    return $films;
}

?>


