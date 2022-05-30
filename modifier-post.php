<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
<?php
if ( isset( $_POST['submit'] ) ) {
    $nom = $_POST['Adhnom']; 
    $prenom = $_POST['Adhprenom']; 
    $adresse = $_POST['Adhadress']; 
	$ville = $_POST['Adhville']; 
	$cp = $_POST['Adhcp'];
	$nivAdh = $_POST['niveauADH']; 
	$typeAdh = $_POST['typeADH']; 
    $matid = $_GET['cid'];
}
try{
    $base = mysqli_connect("127.0.0.1", "root", "", "badminton");
    mysqli_set_charset($base, "utf8");
	$requete= "UPDATE adherent SET nomAdh = '$nom', prenomAdh = '$prenom', adresseAdh = '$adresse',
    VilleAdh = '$ville', cpAdh = '$cp', NiveauAdh = '$nivAdh', TypeAdh = '$typeAdh' WHERE adherent . MatriculeADH = $matid ;";
    $resultat=$base->query($requete);
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
};
?>