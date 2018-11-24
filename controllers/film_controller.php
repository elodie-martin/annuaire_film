<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');
require_once('models/gender_model.php');

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// $id = (count($requete) < 4)? 0 : intval($requete[3]);
	// echo $_SERVER["REQUEST_URI"];

	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
	echo $action;
}

function renderFilm($Id) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$film = getFilm($Id); // Fonction importé depuis film_model.php
	// $genreId = explode(",",$film[0]["GenreId"]); 
	$gender = getGenderIdOfFilm($Id); // Fonction importé depuis gender_model.php

	// print_r($gender); // DEBUG HERE
	echo $twig->render('film_view.twig', array('film' => $film, 'gender' => $gender));
}
 
switch ($action) {
	case 'gender':
		require_once('gender_controller.php');
		break;		
	default:
		# code... ouais.. encore...
		renderFilm($action);
		break;
}

?>