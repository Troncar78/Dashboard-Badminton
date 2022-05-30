<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
<?php
if (empty($_GET['cid'])){
    header("location:badminton.php");
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Badminton</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="photo/logo.png" />
</head>
<body onload="Message()">
<div class="header">
<img src="photo/logo.png" alt="" class="mainlogo">
<h1 class="t1">Dashboard Badminton</h1>
<div class="navliens">
<li><a href=""><img src="photo/home.png" alt="" class="gen">&nbsp; Générale</a></li>
<li><a href=""><img src="photo/gestion.png" alt="" class="ges">&nbsp; Gestion</a></li>
<li><a href=""><img src="photo/search.png" alt="" class="ajt">&nbsp; Recherche</a></li>
<li><a href=""><img src="photo/add.png" alt="" class="sea">&nbsp; Ajouter</a></li>
<li><a href=""><img src="photo/deco.png" alt="" class="deco">&nbsp; Déconnexion</a></li>
</div>
</div>
<div id="id_div_1" style="display:none;">
Texte à masquer, afficher
</div>
<div id="id_div_2" style="display:none;">
<table border="1">
	<caption><h1>Gestion des adhérents<h1></caption>
	<thead>
		<tr>
			<th>Actions</th>
			<th>Nom de l'adhérent</th>
			<th>Prénom de l'adhérent</th>
			<th>Niveau de l'adhérent</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$base = mysqli_connect("127.0.0.1", "root", "", "badminton");
		mysqli_set_charset($base, "utf8");
		$requete = "select * from adherent";
		$resultat = mysqli_query($base, $requete);
		while($ligne = mysqli_fetch_assoc($resultat)){?>
		<tr><td>
			<a href='details.php?cid=<?php echo $ligne["MatriculeADH"]?>'>Détails</a>&nbsp;&#124;&nbsp;
      <a href='supprimer.php?cid=<?php echo $ligne["MatriculeADH"]?>'>Supprimer</a>&nbsp;&#124;&nbsp;
      <a href='modifier.php?cid=<?php echo $ligne["MatriculeADH"]?>'>Modifier</a>&nbsp;&#124;&nbsp;</td>
			<td><?php echo $ligne["nomAdh"]?>
			</td><td><?php echo $ligne["prenomAdh"]?>
			</td><td><?php echo $ligne["NiveauAdh"]?>
			</td></tr>
		<?php } ?>
	</tbody>
	</table>
  </div>
</body>
</html>
<?php
	require'fonctions.php';
	$bdd=getBDD();
	$matid = trim($_GET['cid']);
	$requete= "DELETE FROM `adherent` WHERE `adherent`.`MatriculeADH` = $matid";
	$resultat=$bdd->query($requete);
	$resultat=$base->query($requete);
	function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
    function_alert("Adhérent supprimé");
	echo "<script>window.location.replace('badminton.php');</script>";
?>
