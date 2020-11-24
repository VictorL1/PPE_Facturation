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

</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<div id="gauche">
	<dd><h2>Nouvelle Facture</h2>
	
	<h3>Saisissez ces informations : </h3>
</br>
<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="insertion_fact.php">
		<label>Intitulé : </label>
		<select name="int" id="int">
        <?php 
            $sql = "SELECT * FROM ligue";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['Intitule']; ?>"> <?php echo $donnees['Intitule']; ?></option> 
        <?php  
            }
        ?> 

        </select>
	<form method="POST" action="insertion_facture.php">
		</br> </br> 
		Date de facturation : <input type="text" name="df"></br>
		Echéance : <input type="text" name="ec"></br>
		Compte ligue : <input type="text" name="cl"></br></br>
		<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="insertion_facture.php">
		</br></br>
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
		</br></br>
		Quantité : <input type="text" name="qt">
		</br></br>
		<input type="submit" name="Valider" value="Créer la Nouvelle Facture">
	</form>
</div>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
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
 