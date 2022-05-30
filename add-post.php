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
<div id="id_div_4">
<div class="part1">
<div class="form">
<h1>Ajouter un adhérent</h1>
<form action="add-post.php" method="post">
    Nom :     <input type="text" name="nom" /><br><br>
	Prenom :     <input type="text" name="prenom" /><br><br>
    Adresse : <input type="text" name="adresse" /><br><br>
	Ville : <input type="text" name="ville" /><br><br>
	Code Postal : <input type="text" name="cp" /><br><br>
	<select name="niveauADH" action="add-post.php" method="post">
        <option value="Debutant">Débutant</option>
        <option value="Confirmé">Confirmé</option>
        <option value="Expert">Expert</option>
	</select><br><br>
	<select name="typeADH" action="add-post.php" method="post">
        <option value="Etudiant">Etudiant</option>
        <option value="Salarié">Salarié</option>
        <option value="Retraité">Retraité</option>
    </select><br><br>
    <input type="submit" name="submit" class="submit"/> <br><br>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adresse']) || empty($_POST['ville']) || empty($_POST['cp']) || empty($_POST['niveauADH']) || empty($_POST['typeADH'])){
    function function_alert($message) {
      
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
      
      
    // Function call
    function_alert("Erreur dans la saisie");
    echo "<script>window.location.replace('badminton.php');</script>";
} else {
if ( isset( $_POST['submit'] ) ) {
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $adresse = $_POST['adresse']; 
	$ville = $_POST['ville']; 
	$cp = $_POST['cp'];  
	$nivAdh = $_POST['niveauADH']; 
	$typeAdh = $_POST['typeADH']; 
}
try{
	require'fonctions.php';
	
	$bdd=getBDD();
	$requete= "INSERT INTO adherent(matriculeAdh,nomAdh,prenomAdh,adresseAdh,VilleAdh,cpAdh,NiveauAdh,TypeAdh)
                        VALUES(Null,'$nom','$prenom','$adresse','$ville','$cp','$nivAdh','$typeAdh')";
	$resultat=$bdd->query($requete);
function function_alert($message) {
    echo "<script>alert('$message');</script>";
}
function_alert("Saisie confirmée");
echo "<script>window.location.replace('badminton.php');</script>";
}
catch(Exception $e){
	function function_alert($message) {
      
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
      
      
    // Function call
    function_alert("Erreur dans la saisie");
    echo "<script>window.location.replace('badminton.php');</script>";
}
}
?>