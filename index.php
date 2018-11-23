<?php 
	if (isset($_SERVER["REQUEST_URI"])) {

		$requete = explode("/", trim($_SERVER['REQUEST_URI'], "/"));

		$controller = (count($requete) === 1)? "home":$requete[1];
		$action = (count($requete) < 3)? "liste": $requete[2];
		$id = (count($requete) < 4)? 0 : intval($requete[3]);

		switch ($controller) {
			case 'hotel':
				require_once("controllers/owners_controller.php");
				break;
			case 'chambre_hote':
				require_once("controllers/years_controller.php");
				break;
			default:
				require_once("controllers/home_controller.php");
				break;

		}
	}

	
?>