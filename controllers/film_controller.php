<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');
require_once('models/gender_model.php');

if (isset($_SERVER["REQUEST_URI"])) {
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
	$id = (count($requete) < 4)? 0 : intval($requete[3]);
}

$numberOfFilms = count(getListOfAllFilms());

// Permet d'afficher les infos du film via son ID 
function showFilm($Id) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$film = getFilmById($Id); // Fonction importé depuis film_model.php
	
	// print_r($film); // DEBUG HERE
	
	echo $twig->render('film_view.twig', array('film' => $film));
}

switch ($action) {
	case 'show': // Si l'action est d'afficher le film cliquer (annuaire_film/film/show/)
		showFilm($id); // Affiche le film ayant pour ID $id (annuaire_film/film//$id)
		break;
	default: // Par défaut liste tout les films quand on est sur annuaire_film/film
		require_once('home_controller.php');
		break;
}

?>