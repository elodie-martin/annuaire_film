<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// $id = (count($requete) < 4)? 0 : intval($requete[3]);
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
}

function renderFilm($Id) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$film = getFilm($Id); // Fonction importé depuis film_model.php
	// print_r($film);
	echo $twig->render('film_view.twig', array('film' => $film[0]));
}

switch ($action) {
	case '1':
		renderFilm('1');
		break;
	case '2':
		renderFilm('2');
		break;
	case '3':
		renderFilm('3');
		break;
	case '4':
		renderFilm('4');
		break;
	case '5':
		renderFilm('5');
		break;
	case '6':
		renderFilm('6');
		break;
	case '7':
		renderFilm('7');
		break;
	case '8':
		renderFilm('8');
		break;
	case '9':
		renderFilm('9');
		break;								
	case '10':
		renderFilm('10');
		break;	
	case '11':
		renderFilm('11');
		break;	
	case '12':
		renderFilm('12');
		break;			
	default:
		# code... ouais.. encore...
		break;
}

?>