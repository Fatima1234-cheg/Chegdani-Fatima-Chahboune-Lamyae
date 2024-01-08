<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inndex.css">
</head>
<body>
    <h1> BACK OFFICE </h1>
    <h2> page protégée par mot de passe </h2>
    <h4> veuillez saisir votre login et mot de passe </h4>

    <form action="index.php" method="post">
        <table border=1>
    <tr><td>login: </td><tD><input type="text" id="login" name="login"></td></tr>
    <tr><td>Password: </td><tD><input type="pssword" id="MP" name="MP"></td></tr>
</table>
<input type="submit" value="envoyer" name="btn1">
<input type="submit" value="effacer" name="btn2">
</form>
<?php

try {

  global $bdd;
  $bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');}
catch(Execption $e){
  
  die('Erreur : ' . $e->getMessage());
}
$login=$_POST['login'];
$pass=$_POST['MP'];
if(isset($_POST['login']) and isset($_POST['MP']))
{
	if($_POST['login']=='admin' and $_POST['MP']=='admin'){
	         header( "location: GestionProduits.php");}
	else
	{
	
		echo "<center> Mot de passe incorrect</center>";
	}
}

?>
 
</body>
</html>















