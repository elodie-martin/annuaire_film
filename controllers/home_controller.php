<?php 

require_once('vendor/autoload.php');
require_once('models/home_model.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$films = getList('SELECT ID, Titre FROM Film');

// print_r($films);

echo $twig->render('home_view.twig', array('films' => $films));

?>