<?php 

require_once("models/connect_bdd.php");

function getFilmById($idFilm) {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT movie.title, movie.releaseDate, movie.description, director.lastname, director.name
			FROM movie 
			INNER JOIN id_movie_genre ON id_movie_genre.id_movie = movie.id 
			INNER JOIN genre ON genre.id = id_movie_genre.id_genre
			INNER JOIN id_movie_director ON id_movie_director.id_movie = movie.id 
			INNER JOIN director ON director.id = id_movie_director.id_director
			WHERE movie.id = :idFilm";

	$response = $bdd->prepare( $sql );
	$response->bindParam(':idFilm', $idFilm, PDO::PARAM_STR);
    $response->execute();
    $film = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $film[0];

}

function getListOfAllFilms() {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT id, title FROM movie";
	$response = $bdd->prepare( $sql );
    $response->execute();
    $list = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $list;

}

?>