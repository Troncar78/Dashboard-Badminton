<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
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
<table border="1">
	<caption><h1>Recherche d'adhérents<h1></caption>
	<thead>
		<tr>
			<th>Nom de l'adhérent</th>
			<th>Prénom de l'adhérent</th>
			<th>Niveau de l'adhérent</th>
		</tr>
</thead>
	<tbody>
<body>
<?php
		$nivAdh = $_POST["NivAdh"];
		$base = mysqli_connect("127.0.0.1", "root", "", "badminton");
		mysqli_set_charset($base, "utf8");
        $requete = "select * from adherent where NiveauAdh='$nivAdh'";
        $resultat = mysqli_query($base, $requete);
        while($ligne = mysqli_fetch_assoc($resultat)){
            echo "<tr><td>".$ligne["nomAdh"].
            "</td><td>".$ligne["prenomAdh"].
            "</td><td>".$ligne["NiveauAdh"].
            "</td></tr>";
        }
?>
</tbody>
	</table>
	<br/>
	<br>
</html>