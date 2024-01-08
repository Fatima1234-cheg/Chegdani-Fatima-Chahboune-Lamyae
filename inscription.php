<?php
//fonction pour la connexion au serveur et la base

	try
	{
		
		$bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
   
$NP=$_POST['Nom'];
$sql = "insert into commande (Nom, Prenom, Email, Article,Quantité,Date_livraison,Ville,Code_postale,Adresse_livraison,Paiement) values('".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Email']."','".$_POST['Article']."','".$_POST['Qte']."','".$_POST['Dl']."','".$_POST['Ville']."','".$_POST['Cp']."','".$_POST['Al']."','".$_POST['Payer']."')";
$bdd->exec($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription.php</title>
	<link rel="stylesheet" href="inscription.css">
    
</head>
<body>
	<h1>Perles Royales</h1>
	<div class="text">
    <p>
         Bonjour 
     <span> <?php echo"$NP"?></span>
        
Félicitations pour votre commande.<span><b><?php echo $_POST['Nom'] ?></b></span> 

Nous sommes ravis de vous informer que votre achat a été confirmé.
 <table  border=1>
<tr><td> Modéle d'article: </td><td><?php echo $_POST['Article'] ?></td></tr>
<tr> <td> quantité:</td><td> <?php echo $_POST['Qte'] ?></td></tr>
<tr><td> Date de livraison :</td><td><?php echo $_POST['Dl'] ?></td></tr> 
<tr><td>Ville:</td><td><?php echo $_POST['Ville'] ?></td></tr>
 <tr> <td> Adresse de livraison:</td> <td><?php echo $_POST['Al'] ?></td></tr>
<tr> <td>Paiement: </td> <td><?php echo $_POST['Payer'] ?></td> </tr>
 
</table>

<p>
Nous vous remercions pour votre confiance et sommes impatients de vous fournir une expérience exceptionnelle.

Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.

Nous vous souhaitons une excellente journée !

L'équipe de Perles Royales.

</p>

</p>
</div>
    
</body>
</html>
