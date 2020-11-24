<?php

	$user = 'root';
	$passwd = '';
	$dsn = 'mysql:host=localhost;dbname=m2l';
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