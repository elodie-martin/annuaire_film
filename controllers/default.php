<?php 

require_once('vendor/autoload.php');
require_once('models/function_getData.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$list = getData("SELECT");

echo $twig->render('default.twig', array('message' => "Hello World !", 'liste' => $list));


?>