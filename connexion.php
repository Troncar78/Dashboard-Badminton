<?php
session_start();
if(isset($_POST["bout"]))
{
    $nom = $_POST["pseudo"]; 
    $mdp = $_POST["mdp"];
    $id = mysqli_connect("127.0.0.1", "root", "", "badminton");
    $req = "select * from user where nom='$nom' and mdp='$mdp'";
    $resultat = mysqli_query($id,$req);
    if(mysqli_num_rows($resultat)>0)
    {
        $_SESSION["pseudo"] = $nom;
        header("location:badminton.php");
    }
    else
    {
        $erreur = "Données incorrectes";
    }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
<script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
</head>
<body>
<div class="wrapper">
    <div class="container">
      <h1>Bienvenue</h1>
      <form action="" method="post" class="form">
        <?php if(isset($erreur)) echo "<h3>$erreur</h3>"; ?>
        <input type="text" name="pseudo" placeholder="Pseudo" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="submit" value="Connexion" name="bout" id="login-button" required>
    </form>
    </div>
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="connexion.js"></script> -->
</body>
</html>