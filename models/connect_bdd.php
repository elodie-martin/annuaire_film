<?php 

    // Fichier pour se connecter à la base de donnée.d
    $baseurl = "http://localhost:8080/annuaire_film/";
	$username = 'root';
	$password = 'online@2017';
	$database ='projet_annuaire_films';
  
	$host = 'localhost';

    try{

        $bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$username , $password);

    }catch (Exception $e){

        die('Erreur : ' . $e->getMessage());

    }

    

?>
