<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Acceuil.css"/>
		<title>Modification d'une Prestation</title>
	</head>	
	<body>
		<header>
		<h1>
			<img src="logo_m2l.jpg" class="logo_toutpetit" alt="logo" />
			Maison des Ligues
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
	<h2>La ligue a bien été modifiée !</h2>
 	</br>

<?php	
	$intitule=$_POST ['in'];
	$intitul=$_POST ['it'];
	$numtre=$_POST ['nt'];
	$envoitreso=$_POST ['envtre'];
	include_once('connexionm2l.php');
	$sql="UPDATE ligue SET Intitule = '$intitul',  Numtreso = '$numtre', Envoitreso = '$envoitreso' WHERE Intitule = '$intitule'";
	$dbh->exec($sql);
	$dbh=NULL;
?>
</br></br></br></br></br></br></br></br></br></br></br></br>

	<form method="POST" action="Acceuil.php">
		<input type="submit" name="Ok" value="Retour à l'Acceuil" >
		<input type="submit" name="Submit" value="Fermer l'onglet" onClick="window.close()">
	</form>
</br></br>
</body>
<footer>
		</br></br>Pied de page
	</footer>
</html>