<?php
	$nom = $_GET['nom_film'];
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=film_vu', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	
	if($nom != "") {
		$req = $bdd->prepare('INSERT INTO a_telecharger(nom) VALUES(:nom)');
		$req->execute(array('nom' => $nom));
	}

	header("location: index.php");

?>