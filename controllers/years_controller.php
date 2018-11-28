<?php 

require_once('vendor/autoload.php');
require_once('models/owners_model.php');
require_once('models/gender_model.php');
require_once('models/years_model.php');

function renderFilmsByYears($years) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$filmsByYears = getFilmsByYears($years); // Fonction importé depuis film_model.php
	// $gendeForEachFilms = getYearsOfFilm($filmsByYears.ID) 
	//print_r($filmsByYears); // DEBUG HERE
	$years = listYearsForNav();
	$genders = listGendersForNav();
	$owners = listOwnersForNav();
	echo $twig->render('years_view.twig', array('film' => $filmsByYears, 'years' => $years, 'genders' => $genders, 'owners' => $owners));
}

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// echo $_SERVER["REQUEST_URI"];
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$id = (count($requete) < 4)? 0 : intval($requete[3]);
	// $action = (count($requete) < 3)? NULL: $requete[2];

	renderFilmsByYears($id);
}

?>