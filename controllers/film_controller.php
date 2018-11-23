<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

// $list = getList('SELECT ID, Titre FROM Film');

// echo $list;

// echo $twig->render('home_view.twig', array('message' => "Hello World !", 'list' => $list ));

if (isset($_SERVER["REQUEST_URI"])) {
	// $action = (count($requete) < 3)? "liste": $requete[2];
	// $id = (count($requete) < 4)? 0 : intval($requete[3]);
	$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	$action = (count($requete) < 3)? NULL: $requete[2];

}

switch ($action) {
	case '1':
		$films = getFilm('1');
		echo $twig->render('film_view.twig', array('films' => $films));
		break;

	
	default:
		# code...
		break;
}

?>