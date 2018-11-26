<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');

if (isset($_SERVER["REQUEST_URI"])) {
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];
	$id = (count($requete) < 4)? 0 : intval($requete[3]);
}


// Affiche le block twig contenant la liste de tout les films.
function renderListOfAllFilms() {
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
	$films = getListOfAllFilms();

	echo $twig->render('home_view.twig', array('films' => $films));;	
}


renderListOfAllFilms();

?>