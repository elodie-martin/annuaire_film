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
<<<<<<< HEAD
	$sql = "SELECT movie.id, movie.title,movie.releaseDate,movie.description,director.lastname,director.name AS prenom, genre.name, GROUP_CONCAT(genre.id) 
			FROM movie
			INNER JOIN id_movie_genre on id_movie_genre.id_movie = movie.id
			INNER JOIN genre on genre.id = id_movie_genre.id_genre
			INNER JOIN id_movie_director on id_movie_director.id_movie = movie.id
			INNER JOIN director on director.id = id_movie_director.id_director
			WHERE movie.releaseDate = :years
			GROUP BY (movie.id)";
=======
	$sql = "SELECT Film.ID, Film.Titre,Film.Sortie,Film.Description,Realisateur.Nom,Realisateur.Prenom, Genre.Themes, GROUP_CONCAT(Genre.ID) 
			FROM Film 
			INNER JOIN Liaison_ID_Genre_Film on Liaison_ID_Genre_Film.ID_Film = Film.ID
			INNER JOIN Genre on Genre.ID = Liaison_ID_Genre_Film.ID_Genre 
			INNER JOIN Table_Liaison_ID_Film_Realisateur on Table_Liaison_ID_Film_Realisateur.ID_Film = Film.ID 
			INNER JOIN Realisateur on Realisateur.ID = Table_Liaison_ID_Film_Realisateur.ID_Realisateur
			WHERE Film.Sortie = :years
			GROUP BY (Film.ID)";
>>>>>>> 2c1cbb949c5cb87ed5ceac350620024f23c0f4f6

	$response = $bdd->prepare( $sql );
	$response->bindParam(':years', $years, PDO::PARAM_STR);
    $response->execute();
    $films = $response->fetchAll(PDO::FETCH_ASSOC);

    return $films;
}

?>