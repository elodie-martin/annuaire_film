<?php 

require_once('vendor/autoload.php');
require_once('models/years_model.php');

function renderFilmsByYears($years) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$filmsByYears = getFilmsByYears($years); // Fonction importé depuis film_model.php
	// $gendeForEachFilms = getYearsOfFilm($filmsByYears.ID) 
	//print_r($filmsByYears); // DEBUG HERE
	echo $twig->render('years_view.twig', array('film' => $filmsByYears));
}

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// echo $_SERVER["REQUEST_URI"];
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
	$id = (count($requete) < 4)? 0 : intval($requete[3]);

}

switch ($action) {
	case 'list':
		renderFilmsByYears($id);
		break;
	default:
		require_once("controllers/404.php");
		break;
}

?>