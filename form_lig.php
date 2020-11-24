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
	<dd><h2>Nouvelle ligue</h2>
	
	<h3>Saisissez ces informations : </h3>
	<form method="POST" action="insertion_ligue.php">
		Nom Ligue : <input type="text" name="nl"></br>
		Numéro de compte : <input type="text" name="nc"></br>
		<form method="POST" action="insertion_ligue.php">
		<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="insertion_ligue.php">
		<label>Numéro Trésorier : </label>
		<select name="nt" id="nt">
        <?php 
            $sql = "SELECT * FROM ligue";
            $sth = $dbh->query($sql);
            while ($donnees=$sth->fetch()) 
            {
        ?>
            <option value="<?php echo $donnees['Numtreso']; ?>"> <?php echo $donnees['Numtreso']; ?></option> 
        <?php  
            }
        ?>
</select></br>
		Envoyer la facture au trésorier : </br>
		<input type="radio" name="envoie" value="oui" id="oui"/>Oui</br>
		<input type="radio" name="envoie" value="non" id="non"/>Non</br></br>
		<input type="submit" value="Enregistrer la ligue"></br></br></br>
	</form>

	<h2>Supprimer ligue</h2>
	<form method="POST" action="supprimer_ligue.php">
		<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="supprimer_ligue.php">
		<label>Ligue à supprimer : </label>
		<select name="in" id="in">
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
</select></br></br>
        <input type="submit" value="Supprimer la ligue">
    </form>
</div>		
<div id="droite">
	<h2>Modification ligue</h2>
	
	<h3>Saisissez ces informations : </h3>
	
	<form method="POST" action="modification_ligue.php">
		<?php
        require_once('Connexionm2l.php');
        
    ?>
	<form method="POST" action="modification_ligue.php">
		<label>Nom Ligue : </label>
		<select name="in" id="in">
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
    </select></br></br>
		
		Nom Ligue : <input type="text" name="it"></br>
		Numéro trésorier : <input type="text" name="nt" placeholder="1; 2 ou 3"></br>

		Envoyer la facture au trésorier : </br>
		<input type="radio" name="envtre" value="1" id="oui"/>Oui</br>
		<input type="radio" name="envtre" value="0" id="non"/>Non</br></br>
		<input type="submit" value="Enregistrer les modifications"></br></br></br>
	</form>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
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
 