<?php 

require_once('vendor/autoload.php');
require_once('models/owners_model.php');


if (isset($_SERVER["REQUEST_URI"])) {
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
	$id = (count($requete) < 4)? 0 : intval($requete[3]);
}

function renderFilmsByOwners($ownersId) {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$filmsByOwners = getFilmsByOwners($ownersId); // Fonction importé depuis owners_model.php
	print_r($filmsByOwners); // DEBUG HERE

	echo $twig->render('owners_view.twig', array('film' => $filmsByOwners));
}
	
switch ($action) {
	case 'list':
		renderFilmsByOwners($id);
		break;
	default:
		require_once("controllers/error_controller.php");
		break;
}


?>