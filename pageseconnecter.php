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

$NP=$_POST['NP'];
$Num=$_POST['Num'];
$eml=$_POST['eml'];

$sql1 = "insert into client(nom, numéro, email, password) values('".$_POST['NP']."','".$_POST['Num']."','".$_POST['eml']."','".$_POST['MP']."')";
$bdd->exec($sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pageseconnecter.php</title>
	<link rel="stylesheet" href="Style2.css">

</head>
<body>
	<p class="page"> <B>Bienvenue sur Perles Royales </b><span><?php echo"$NP"?></span> !

Nous sommes ravis de vous compter parmi nous. Votre inscription est maintenant complète, et vous avez désormais accès à tous nos services passionnants. N'hésitez pas à explorer notre site et à profiter de toutes les fonctionnalités offertes.

Merci de faire partie de la communauté Perles Royales !</p>
</body>
</html>