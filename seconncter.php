 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Se connecter</title>
   <link rel="stylesheet" href="Style.css">
</head>
<body>
   <form action ="pageseconnecter.php" method="post" onSubmit="verif()">
      <h1>Perles Royales</h1>
      <script src="seconnecter.js"></script>
   <div class="container active">
      <span class="overlay" id="percent"></span>
   
      <h2>Bienvenue</h2>
      <input type="text" placeholder="User name" name="NP" ><br>
      <input type="text" placeholder="Number phone" name="Num">
      <input type="text" placeholder="Email" name="eml" ><br>
      <input type="password" placeholder="Password" name ="MP" ><br>
      <input type="submit" value="Se connecter" name="seconnecter">
   </form>
</div>


</body>
</html>

