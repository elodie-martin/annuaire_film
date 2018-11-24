<?php 

require_once('vendor/autoload.php');
require_once('models/owners_model.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$auteurs = getOwners();

// print_r($auteurs);

echo $twig->render('home_view.twig', array('auteurs' => $auteurs));

?>