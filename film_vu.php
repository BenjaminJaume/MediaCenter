<?php

// Tout ce qui est marqué en commentaire fait parti de la mise à
// jour effectuée le 24/12/2015 suite au mauvais fonctionnement
// de la mise à 1 de la colonne "Vu" de la BDD
// Car on demander de déplacer le fichier, et de directement tester
// s'il existait, alors qu'il existait bien, mais quelques millisecondes
// après

	$chemin = '../../../1) Films/1Nouveaux/' . $_GET['film'];
	$chemin_nouveau_fichier = '../../../1) Films/1Nouveaux/Vus/' . $_GET['film'];
	$file = $_GET['film'];
	
	//echo "chemin = " . $chemin . "<br />";
	//echo "chemin_nouveau_fichier = " . $chemin_nouveau_fichier . "<br />";
	//echo "file = " . $file . "<br />";
	
	if(file_exists($chemin)) {
		$file = str_replace(" ", "*", $file);
		//echo "nouveau file = " . $file . "<br />";
		$handle = popen ("start /B E:\Logiciel\wamp\www\batch.bat $file", 'r');
		pclose ($handle);
		
		//if(file_exists($chemin_nouveau_fichier)) {
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=film_vu', 'root', '');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			//echo "GET['film'] = " . $_GET['film'];
			$req = $bdd->query('UPDATE film_vu SET vu = 1 WHERE film=\'' . $_GET['film'] . '\'');
			
			header("location: index.php");
		//}
		//else {
		//	echo "Aie 2 : file_exists(chemin_nouveau_fichier) = FAUX";
			//header("location: erreur.php");
		//}
	}
	else {
		//echo "Aie 1 : file_exists(chemin) = FAUX";
		header("location: index.php");
	}
?>