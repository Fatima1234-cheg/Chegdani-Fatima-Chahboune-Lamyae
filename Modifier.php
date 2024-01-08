<html>
<head>
<title>Modifier un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php 
	if(isset($_POST['Nom']))
	{
		connexion();
		$sql1="select * from produit where Nom='".$_GET['Nom']."'";
		$reponse = $bdd->query($sql1);
		while($enreg = $reponse->fetch())
		{
?>
			<center>
			<h3>Modification du produit : <?php echo $_GET['Nom'] ?></h3>
			<form action="modifier.php" method="post">
			<table border="1">
			<tr><td bgcolor="#00FF99">Modéle d'article</td><td><input type="text" name="categ" value="<?php echo $enreg['Article']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">Quantité</td><td><input type="text" name="nom" value="<?php echo $enreg['Qte']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">Date de livraison</td><td><input type="text" name="marque" value="<?php echo $enreg['Dl']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">Adresse</td><td><input type="text" name="prix" value="<?php echo $enreg['Al']; ?>"></td></tr>
			</table>
			<input type="submit" value="Modifier"> &nbsp;&nbsp;<input type="reset" value="Annuler">
			<input type="hidden" name="reference" value="<?php echo $_GET['reference']; ?>">
			</form>
			</center>
<?php
		}
    }
	// mise à jour de produit
	if(isset($_POST['nom']) and isset($_POST['marque']) and isset($_POST['prix']))
	{
		connexion();
		$sql="update produit set nom='".$_POST['nom']."', marque='".$_POST['marque']."', prix='".$_POST['prix']."' where ref= '".$_POST['reference']."'";
		$bdd->exec($sql);
		echo '<center> Modification du produit <strong>'.$_POST['nom'].'</strong> effectué avec succés </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');

	}
?>
</body>
</html>