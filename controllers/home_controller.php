<?php 

require_once('vendor/autoload.php');
require_once('models/film_model.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$list = getList('SELECT * FROM Film');

echo $twig->render('home_view.twig', array('message' => "Hello World !", 'liste' => $list ));

?>