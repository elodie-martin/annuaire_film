<?php 

require_once('vendor/autoload.php');
require_once('models/getFilms.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$list = getFilms();

echo $twig->render('index.twig', array('message' => "Hello World !", 'liste' => $list ));




?>