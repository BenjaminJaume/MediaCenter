<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=film_vu', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
		
	$req = $bdd->query('UPDATE a_telecharger SET ajoute = 1 WHERE nom=\'' . $_GET['film'] . '\'');
	
	header("location: index.php");
?>