<?php
//fonction pour la connexion au serveur et la base
function connexion(){
	try
	{
		global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
    if( $bdd){
        echo " connexion good";
    }
    else {
         echo " bad connexion";

    }}
?>