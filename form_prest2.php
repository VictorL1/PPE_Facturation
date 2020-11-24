<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="form_prest.css"/>
	<title>Maison des Ligues - Ajout Préstation</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<?php
	$user = 'root';
	$passwd = '';
	$dsn = 'mysql:host=localhost;dbname=buvette';
	try
		{
			$dbh= new PDO($dsn, $user, $passwd);
		}
	catch (PDOException $e)
		{
			print "Erreur !:" .$e->getMessage()."<br/";
			die();
		}
?>
<body>
	<div id="bande_horizontale">
	
		<img src="Logo.jpg">
	</div>
	</br>
	<dd><h2>Nouvelle Prestation</h2>
	
	<h3>Saisissez ces informations : </h3>
	
	<form method="POST" action="insertion_prest.php">
		Code : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="co"></br>
		Libelle : &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="li"></br>
		Prix Unitaire : <input type="text" name="pu"></br></br>
		<input type="submit" value="Enregistrer la prestation"></br></br></br>
	</form></br></br>

	<form method="POST" action="modification_prest.php">
		<table>

			<tr>
				<th>Choisir le code <?php foreach ($result as $row) { echo $row ['code'];}?></th>
			</tr>


			<tr>
				<th>Prix Unitaire : <input type="text" name="pu"></th>
			</tr>
		</table>
		<input type="submit" value="Enregistrer la prestation"></br></br></br>
	</form>

	<form method="POST" action="Acceuil.html#Acceuil">
		<input type="submit" name="Ok" value="Retour à l'Acceuil" >
		<input type="submit" name="Submit" value="Fermer l'onglet" onClick="window.close()">
	</form>
	</body>
</html>