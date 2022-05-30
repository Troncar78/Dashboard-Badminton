<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
<?php $matid = intval($_GET['cid']);
$base = mysqli_connect("127.0.0.1", "root", "", "badminton");
mysqli_set_charset($base, "utf8");
$requete = "select * from adherent where `adherent`.`MatriculeADH` = $matid";
$resultat = mysqli_query($base, $requete);
while($ligne = mysqli_fetch_assoc($resultat)){
  $nom = $ligne["nomAdh"];
  $prenom = $ligne["prenomAdh"];
  $adresse = $ligne["adresseAdh"];
  $ville =$ligne["VilleAdh"];
  $cp = $ligne["cpAdh"];
  $Niveau = $ligne["NiveauAdh"];
  $type = $ligne["TypeAdh"];
} ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Détails</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<img src="photo/logo.png" alt="" class="mainlogo">
<h1 class="t1">Dashboard Badminton</h1>
<div class="navliens">
<li><a href="badminton.php"><img src="photo/home.png" alt="" class="gen">&nbsp; Générale</a></li>
<li><a href="badminton.php"><img src="photo/gestion.png" alt="" class="ges">&nbsp; Gestion</a></li>
<li><a href="badminton.php"><img src="photo/search.png" alt="" class="ajt">&nbsp; Recherche</a></li>
<li><a href="badminton.php"><img src="photo/add.png" alt="" class="sea">&nbsp; Ajouter</a></li>
<li><a href="deconnexion.php"><img src="photo/deco.png" alt="" class="deco">&nbsp; Déconnexion</a></li>
</div>
</div>
<div class="part2">
<div class="box">
<h1>Detail de l'adhérent</h1>
<p> Nom : <?php echo $nom?></p>
<p> Prenom : <?php echo $prenom?></p>
<p> Adresse : <?php echo $adresse?></p>
<p> Ville : <?php echo $ville?></p>
<p> Code Postal : <?php echo $cp?></p>
<p> Niveau : <?php echo $Niveau?></p>
<p> Type : <?php echo $type?></p>
</div>
</div>
</body>
</html>