<?php 
	if (isset($_SERVER["REQUEST_URI"])) {

		$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));

		$controller = (count($requete) === 1)? "home":$requete[1];
		$action = (count($requete) < 3)? "liste": $requete[2];
		$id = (count($requete) < 4)? 0 : intval($requete[3]);

		switch ($controller) {
			case 'owners':
				require_once("controllers/owners_controller.php");
				break;
			case 'years':
				require_once("controllers/years_controller.php");
				break;
			case 'film':
				require_once("controllers/film_controller.php");
				break;	
			default:
				require_once("controllers/home_controller.php");
				break;

		}
	}

	
?>