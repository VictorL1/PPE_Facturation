<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Acceuil.css"/>
		<title>Maison des Ligues</title>
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

  	<?php

  	$newNumber = 0;
  	try {
  		$pdo->beginTransaction();
  		$query = "UPDATE compteur SET Numero = Numero + 1 WHERE Description='numFacture'";
  		$nb_record = $pdo->exec($query);
  		$stmt = $pdo->query("SELECT numero FROM compteur WHERE Description='numFacture'");
  		$result = $stmt->fetch(PDO::FETCH_ASSOC);
  		$newNumber = $result["Numero"];
  		$pdo->commit();
  		} catch(PDOException $e)
	  {
	  	$conn->rollBack();
	  }
	  echo "nouveau n° facture = ". $newNumber
	  ?>







	</body>
	<footer>
		</br></br>Pied de page
	</footer>
</html>