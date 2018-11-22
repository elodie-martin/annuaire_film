<?php 


function getData ($sql) {

	$username = 'root';
	// $password = 'online@2017';
	// $database ='projet_annuaire_films';
    $password = '09001268lrlr';
    $database ='annuaire_film';
	$host = 'localhost';

    try{

        $bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$username , $password);

    }catch (Exception $e){

        die('Erreur : ' . $e->getMessage());

    }

    $response = $bdd->prepare( $sql );
    // $response->bindParam(':num', $num, PDO::PARAM_INT)
    $response->execute();
    $data = $response->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

?>