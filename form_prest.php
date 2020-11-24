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


	

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<div id="gauche">
	<dd><h2>Nouvelle Prestation</h2>
	
	<h3>Saisissez ces informations : </h3>
	
	<form method="POST" action="insertion_prest.php">
		Code : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="co"></br>
		Libelle : &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="li"></br>
		Prix Unitaire : <input type="text" name="pu"> €</br></br>
		<input type="submit" value="Enregistrer la prestation"></br></br></br>
	</form>
	</br>
	<h2>Supprimer Prestation</h2>
	<form method="POST" action="supprimer_prest.php">
		<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="supprimer_prest.php">
		<label>Prestation à supprimer : </label>
		<select name="li" id="li">
        <?php 
            $sql = "SELECT * FROM prestation";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['Libelle']; ?>"> <?php echo $donnees['Libelle']; ?></option> 
        <?php  
            }
        ?>
</select></br></br>
        <input type="submit" value="Supprimer la ligue">
    
</div>
<div id="droite">
	<dd><h2>Modification Prestation</h2>
	
	<h3>Saisissez ces informations : </h3>
	<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="modification_prest.php">
		<label>Code : </label>
		<select name="co" id="co">
        <?php 
            $sql = "SELECT * FROM prestation";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['Code']; ?>"> <?php echo $donnees['Code']; ?></option> 
        <?php  
            }
        ?>  
        </select>
		Prix Unitaire : <input type="text" name="pu"> €</br></br>
		<input type="submit" value="Enregistrer la prestation"></br></br></br>
	</form>
	
</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

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