<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Acceuil.css"/>
		<title>Nouvelle Ligue</title>
	</head>	
	<body>
		<header>
		<h1>
			<img src="logo_m2l.jpg" class="logo_toutpetit" alt="logo" />
			
		</br></h1>
		
		<nav class="menu">
  			<ul>
  				<li class="Ligues"><a href="form_lig.php"> Formulaire des </br>Ligues </a></li>
  				<li><a href="form_prest.php"> Formulaire des Prestations </a></li>
  				<li><a href="form_fact.php"> Formulaire des Factures  </a></li>
  			</ul>
  		</nav>
  		</header>


	

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	<h2>La nouvelle ligue a été créée !</h2>
 	</br>
</br></br></br></br></br></br></br></br></br></br></br></br>

	<form method="POST" action="Acceuil.php">
		<input type="submit" name="Ok" value="Retour à l'Acceuil" >
		<input type="submit" name="Submit" value="Fermer l'onglet" onClick="window.close()">
	</form>
</br></br>
</body>
<?php
	$numCo=$_POST ['nc'];
	$nomLi=$_POST ['nl'];
	$numTre=$_POST ['nt'];
	$envoy=$_POST ['envoie']; 
	include_once('connexionm2l.php');
	$sql="INSERT INTO ligue(Numcompte,Intitule,Numtreso,Envoitreso) VALUES('$numCo','$nomLi','$numTre','$envoy')";
	$dbh->exec($sql);
	$dbh=NULL;
?>
<footer>
		</br></br>Pied de page
	</footer>
</html>