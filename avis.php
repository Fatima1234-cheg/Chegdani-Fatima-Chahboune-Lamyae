<?php
//fonction pour la connexion au serveur et la base

	try
	{
		global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>avis.php</title>
        <link rel="stylesheet" href="avis.css">
    </head>
    <body>
        <p class="msg">Votre message a été envoyé avec succés</p>
        <div class="imgmsg"><img src="msg confirmé.jpg" alt=""></div>
    </body>
    </html>