<?php 

    // Fichier pour se connecter à la base de donnée.

	$username = 'root';
	$password = '09001268lrlr';
	$database ='projet_annuaire_films';
  
	$host = 'localhost';

    try{

        $bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$username , $password);

    }catch (Exception $e){

        die('Erreur : ' . $e->getMessage());

    }

    

?>
