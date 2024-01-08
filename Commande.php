<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande.php</title>
    <link rel="stylesheet" href="Style1.css">
  
</head>
<body>
    <form action="inscription.php" method="POST">
      <h1> Formulaire Commande</h1>
      <table >
   <tr><td> <label for="Nom" required>Nom:</lable> </td><td><input type="text" name ="Nom" id="Nom"></td></tr><tr><td><label for="Prénom:">Prénom:</label></td><td> <input type="text" name="Prenom" id="Prenom"><br></td></tr>
    <tr><td><label for="email">Email:</lable></td><td><input type="email" name="Email" id="Email" ><br></td></tr>
 <tr><td><label for="Article">Modéle de l'article :</label></td><td> <input type="text"  name ="Article" id="Article"></td></tr>

 <tr><td><label for="qte">Quantité:</label></td><td><input type="Number" name="Qte" id="Qte"><br></td></tr>
 <tr> <td><label for="DL">Date de livraison:</td><td></label><input type="date" name="Dl" id="Dl"><br></td></tr>
<tr> <td><label for="Ville">Ville:</label></td> <td><input type="text" name="Ville" id="Ville"><br></td></tr>
 <tr><td><label for="CP">Code Postale:</label></td><td> <input type="text" name="Cp" id="Cp"><br></td> </tr>
 <tr><td><label for="AL">Adresse de livraison:</label></td><td><input type="text" name ="Al" id="Al"><br></td> </tr>
 <tr><td><label for="Payer">Paiement:</label></td><td><input type="text" name="Payer" id="Payer"></td> </tr>
 <tr><td></td><td><button type="submit "  id="btn">Acheter</button></td></tr>


</form>

</body>
</html>