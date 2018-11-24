<?php 

require_once('vendor/autoload.php');
require_once('models/gender_model.php');

function renderFilmsByGender($genderId) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$filmsByGender = getFilmsByGender($genderId); // Fonction importé depuis film_model.php
	// $gendeForEachFilms = getGenderIdOfFilm($filmsByGender.ID) 
	// print_r($filmsByGender); // DEBUG HERE
	echo $twig->render('gender_view.twig', array('film' => $filmsByGender));
}

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// echo $_SERVER["REQUEST_URI"];
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$id = (count($requete) < 4)? 0 : intval($requete[3]);
	// $action = (count($requete) < 3)? NULL: $requete[2];

	renderFilmsByGender($id);
}

	



?>