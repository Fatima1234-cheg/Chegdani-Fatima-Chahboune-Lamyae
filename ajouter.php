<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inndex.css">
</head>
<body>
<h1 class="bien"> choisir une action</h1>
<a href="#">Ajouter le produits </a>
<a href="#"> Chercher le produits </a>
<a href="#">Lister le produits </a>
<h3> AJOUTER UN NOUVEAU PRODUIT </h3>
<form action="ajouter.php" method="post">
        <table border=1>
    <tr><td>réf: </td><tD><input type="text" id="ref" name="ref"></td></tr>
    <tr><td> catégorie </td><tD><select name="cat" id="cat">
        <option value="ordinateur"> ordinateur </option>
        <option value="souris"> souris </option>
        <option value="pc"> pc </option>
    </td></tr>
    <tr><td>Nom </td><tD><input type="text" id="name" name="name"></td></tr>
    <tr><td>marque</td><tD><input type="text" id="marque" name="marque"></td></tr>
    <tr><td>prix </td><tD><input type="text" id="prix" name="prix"></td></tr>
</table>
 <input type="submit" value="Ajouter" name="btn1">
<input type="submit" value="Annuler" name="btn2">
</form>
<?php
try {

    global $bdd;
    $bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');}
  catch(Execption $e){
    
    die('Erreur : ' . $e->getMessage());
  }
 $ref=$_POST['ref'];
 $cat=$_POST ['cat'];
 $name=$_POST['name'];
 $mar=$_POST['marque'];
 $px=$_POST['prix'];
if(isset($ref) and isset($cat) and isset($name)and isset($mar) and isset($px)){
    $requete='select *from produits where ref='.$ref;
    $bdd->query($requete);
    while($donne=$requete->fetch){
        if($_POST['ref']==$donne['ref'] ){
            echo " le produit est déja existe";
        }
        else  echo " tu peut insérer des produits";
    }
}
?>
</body>
</html>