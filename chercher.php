<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inndex.css">


</head>
<body>
    <h1>Rechercher un produit </h1>
    <form method="Post" action="chercher.php">
        <table>
            <tr><td>Mot clé:</td><td> <input type="text" name="MC" id="MC">
</tr></table>
<input type="submit" value="Rechercher"> <input type="submit" value="Annuler">
<table border= 1>
    <tr> <th>Catégorie</th><th>Ref</th><th>Nom</th><th>Marque</th><th>Prix </th><th>Modifier/Supprimer</th></tr>
    <tr><td>PC</td><td>PC01</td><td>HP PV</td><td>HP</td><td>945</td><td> <a href="modifier.php">Modifier</a>  <a href="supprimer.php">Supprimer</a><td></tr>
  
    <tr><td>Ord</td><td>H542</td><td>HP Palivion DE 9000</td><td>HP</td><td>1200</td><td> <a href="modifier.php">Modifier</a>  <a href="supprimer.php">Supprimer</a><td></tr>
</body>
</html>