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


}

switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}

?>