<?php 

require_once("models/connect_bdd.php");

function getFilmsByOwners() {

	// Accéder à la variable $bdd du fichier connect_bdd.php
	global $bdd;

	// ICI METTRE LA REQUETE
	$sql = "SELECT movie.title, director.lastname,director.name FROM movie 
	INNER JOIN id_movie_director on id_movie_director.id_movie = movie.id 
	INNER JOIN director on director.id = id_movie_director.id_director 
	ORDER BY lastname";
	$response = $bdd->prepare( $sql );
    $response->execute();
    $owners = $response->fetchAll(PDO::FETCH_ASSOC);

    // Retourne le resultat de la requête
    return $owners;

}

?>