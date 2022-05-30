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
<div class="part2">
<div class="form">
<form action="modifier-post.php?cid=<?php echo $matid?>" method="post" class="modif">
<h1>Modifier un adhérent</h1>
<p>Nom de l'adhérent</p>
<form action="modifier-post.php" method="post">
<input type="text" name="Adhnom" value="<?php echo $nom?>"/>
<p>Prenom de l'adhérent</p>
<input type="text" name="Adhprenom" value="<?php echo $prenom?>"/>
<p>Adresse de l'adhérent</p>
<input type="text" name="Adhadress" value="<?php echo $adresse?>"/>
<p>Ville de l'adhérent</p>
<input type="text" name="Adhville" value="<?php echo $ville?>"/>
<p>Code Postal de l'adhérent</p>
<input type="text" name="Adhcp" value="<?php echo $cp?>"/>
<p>Niveau de l'adhérent</p>
<select name="niveauADH">
  <option value="Debutant">Débutant</option>
  <option value="Confirmé">Confirmé</option>
  <option value="Expert">Expert</option>>
</select>
<p>Type de l'adhérent</p>
<select name="typeADH">
  <option value="Etudiant">Etudiant</option>
  <option value="Salarié">Salarié</option>
  <option value="Retraité">Retraité</option>
</select>
<br><br><input type="submit" name="submit" class="submit"> 
</form></div></div> <br><br><br>
</body>
</html>
