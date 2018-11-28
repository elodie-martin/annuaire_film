<?php 

require_once("models/connect_bdd.php");

// RETOURNE LES FILMS EN FONCTION DE L'ANNEE
function getYears($years) { 

	global $bdd;

	$sql = "SELECT movie.releaseDate 
			FROM movie 
			WHERE movie.releaseDate = :years";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':years', $years, PDO::PARAM_STR);
    $response->execute();
    $years = $response->fetchAll(PDO::FETCH_ASSOC);

    return $years;
}

// RETOURNE TOUS LES FILMS QUI ONT L'ANNEE PASSER EN PARAMETRE
function getFilmsByYears($years) {
	
	global $bdd;

	// Va chercher tout les films qui ont l'annee suivante...
	$sql = "SELECT movie.id, movie.title,movie.releaseDate,movie.description,director.lastname,director.name AS prenom, genre.name, GROUP_CONCAT(genre.id) 
			FROM movie
			INNER JOIN id_movie_genre on id_movie_genre.id_movie = movie.id
			INNER JOIN genre on genre.id = id_movie_genre.id_genre
			INNER JOIN id_movie_director on id_movie_director.id_movie = movie.id
			INNER JOIN director on director.id = id_movie_director.id_director
			WHERE movie.releaseDate = :years
			GROUP BY (movie.id)";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':years', $years, PDO::PARAM_STR);
    $response->execute();
    $films = $response->fetchAll(PDO::FETCH_ASSOC);

    return $films;
}

?>