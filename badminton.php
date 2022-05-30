<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
<?php $base = mysqli_connect("127.0.0.1", "root", "", "badminton");
mysqli_set_charset($base, "utf8");
$requete = "select * from adherent where TypeAdh='Etudiant'";
$resultat = mysqli_query($base, $requete);
  if ($resultat)
  {
  $row1 = mysqli_num_rows($resultat);
  }
$requete2 = "select * from adherent where TypeAdh='Salarié'";
$resultat2 = mysqli_query($base, $requete2);
  if ($resultat2)
  {
  $row2 = mysqli_num_rows($resultat2);
  }
$requete3 = "select * from adherent where TypeAdh='Retraité'";
$resultat3 = mysqli_query($base, $requete3);
  if ($resultat2)
  {
  $row3 = mysqli_num_rows($resultat2);
  }
?>
<?php $base = mysqli_connect("127.0.0.1", "root", "", "badminton");
mysqli_set_charset($base, "utf8");
$requete4 = "select * from adherent where NiveauAdh='Débutant'";
$resultat4 = mysqli_query($base, $requete4);
  if ($resultat4)
  {
  $row4 = mysqli_num_rows($resultat4);
  }
$requete5 = "select * from adherent where NiveauAdh='Confirmé'";
$resultat5 = mysqli_query($base, $requete5);
  if ($resultat5)
  {
  $row5 = mysqli_num_rows($resultat5);
  }
$requete6 = "select * from adherent where NiveauAdh='Expert'";
$resultat6 = mysqli_query($base, $requete6);
  if ($resultat6)
  {
  $row6 = mysqli_num_rows($resultat6);
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
  <script src="https://code.jquery.com/jquery-3.6.0.js" 
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
</script>
<script>
  function visibilite(thingId)
  {
  var targetElement;
  targetElement = document.getElementById(thingId) ;
  if (targetElement.style.display == "none")
  {
  id_div_1.style.display = "none";
  id_div_2.style.display = "none";
  id_div_3.style.display = "none";
  id_div_4.style.display = "none";
  targetElement.style.display = "" ;
  }
  }
  // function visibilite2(thingId)
  // {
  // var targetElement2;
  // targetElement2 = document.getElementById(thingId) ;
  // if (targetElement2.style.display == "none")
  // {
  // id_search.style.display = "none";
  // targetElement.style.display = "" ;
  // }
  // }
</script>
</head>
<body>
<div class="header">
<img src="photo/logo.png" alt="" class="mainlogo">
<h1 class="t1">Dashboard Badminton</h1>
<div class="navliens">
<li><a href="" onclick="javascript:visibilite('id_div_1'); return false;"><img src="photo/home.png" alt="" class="gen">&nbsp; Générale</a></li>
<li><a href="" onclick="javascript:visibilite('id_div_2'); return false;"><img src="photo/gestion.png" alt="" class="ges">&nbsp; Gestion</a></li>
<li><a href="" onclick="javascript:visibilite('id_div_3'); return false;"><img src="photo/search.png" alt="" class="ajt">&nbsp; Recherche</a></li>
<li><a href="" onclick="javascript:visibilite('id_div_4'); return false;"><img src="photo/add.png" alt="" class="sea">&nbsp; Ajouter</a></li>
<li><a href="deconnexion.php"><img src="photo/deco.png" alt="" class="deco">&nbsp; Déconnexion</a></li>
</div>
</div>
<div id="id_div_1" style="display:none;">
<div class="chart">
<div class="chart-under">
<h1>Type des adhérents</h1>
</div>
<div class="chartBox">
    <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Etudiant', 'Salarié', 'Retraité',],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $row1; ?>, <?php echo $row2; ?>, <?php echo $row3; ?>,],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {}
    });
    </script>
    </div>
    <div class="chart2">
    <div class="chart2-under">
    <h1>Niveaux des adhérents</h1>
    </div>
    <div class="chartBox">
    <canvas id="myChart2"></canvas>
    </div>
      <script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Etudiant', 'Salarié', 'Retraité',],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $row4; ?>, <?php echo $row5; ?>, <?php echo $row6; ?>,],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {}
    });
    </script>
</div>
</div>
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
  <div id="id_div_3" style="display:none;">
  <!-- <div id="id_search" style="display:;"> -->
  <h1>Rechercher un adhérent</h1>
<form action="search-post.php" method="post">
<center>
<p class="text">Niveau de L'adhérent : </p>
    <select name="NivAdh" class="niv"> 
        <?php
          $base = mysqli_connect("127.0.0.1", "root", "", "badminton");
          mysqli_set_charset($base, "utf8");
          $resultat = mysqli_query($base, "select distinct niveauAdh from Adherent");
          while($ligne = mysqli_fetch_assoc($resultat)){
          echo "<option value='".$ligne["niveauAdh"]."'> ".$ligne["niveauAdh"]." </option>";
          }
        ?>
</center>
</select>
<br><br>
<input type="submit" class="submit" href="" onclick="javascript:visibilite2('id_div_5'); return false;">
</form>
</div>
<div id="id_div_4" style="display:none;">
<div class="part1">
<div class="form">
<h1>Ajouter un adhérent</h1>
<form action="add-post.php" method="post">
    Nom :     <input type="text" name="nom" /><br><br>
	Prenom :     <input type="text" name="prenom" /><br><br>
    Adresse : <input type="text" name="adresse" /><br><br>
	Ville : <input type="text" name="ville" /><br><br>
	Code Postal : <input type="text" name="cp" /><br><br>
	Niveau : <select name="niveauADH" action="add-post.php" method="post">
        <option value="Debutant">Débutant</option>
        <option value="Confirmé">Confirmé</option>
        <option value="Expert">Expert</option>
	</select><br><br>
	Type : <select name="typeADH" action="add-post.php" method="post">
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