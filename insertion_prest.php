<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Acceuil.css"/>
		<title>Nouvelle Prestation</title>
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
	<h2>La nouvelle prestation a été créée !</h2>
 	</br>
</body>
<?php
	$code=$_POST ['co'];
	$Libelle=$_POST ['li'];
	$PrixU=$_POST ['pu']; 
	include_once('connexionm2l.php');
	$sql="INSERT INTO prestation(Code,Libelle,Pu) VALUES('$code','$Libelle','$PrixU')";
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