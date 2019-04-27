<?php
	session_start();
?>

<!DOCTYPE html>

<html>
    <head>
		<title>Téléchargements</title>
		
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="icon" type="ico" href="icone.ico" />
		
	</head>
	
	<body>
			
		<br /><br />
		
		<?php
			/*	$email  = 'name@example.com';
				$domain = strstr($email, '@');
				echo $domain; // Affiche : @example.com

				$user = strstr($email, '@', true); // Depuis PHP 5.3.0
				echo $user; // Affiche : name
			*/
			
			function nettoyer($fichier, $valider_nettoyage_extension)
			{
				$fichier = str_replace("[www.Cpasbien.me] ", "", $fichier);
				$fichier = str_replace("[www.Cpasbien.pe] ", "", $fichier);
				$fichier = str_replace("www.Cpasbien.pw", "", $fichier);
				$fichier = str_replace("[ www.Cpasbien.pw ] ", "", $fichier);
				$fichier = str_replace("[ www.CpasBien.pw ] ", "", $fichier);
				$fichier = str_replace("www.Cpasbien.pw", "", $fichier);
				
				$fichier = str_replace("FRENCH", "", $fichier);
				$fichier = str_replace("LD", "", $fichier);
				$fichier = str_replace("BDRip", "", $fichier);
				$fichier = str_replace("XviD-MiND", "", $fichier);
				$fichier = str_replace("HDTV", "", $fichier);
				$fichier = str_replace("x264-AUTHORiTY", "", $fichier);
				$fichier = str_replace("x264-MiND", "", $fichier);
				$fichier = str_replace("XviD-RNT", "", $fichier);
				$fichier = str_replace("XViD-RNT", "", $fichier);
				$fichier = str_replace("RERIP", "", $fichier);
				$fichier = str_replace("WEB-DL", "", $fichier);
				$fichier = str_replace("x264-LiBERTY", "", $fichier);
				$fichier = str_replace("XviD-ZT", "", $fichier);
				$fichier = str_replace("PROPER", "", $fichier);
				$fichier = str_replace("FiNAL", "", $fichier);
				$fichier = str_replace("torrent", "", $fichier);
				$fichier = str_replace("[X264]", "", $fichier);
				$fichier = str_replace("[HD 720p]", "", $fichier);
				$fichier = str_replace("[FR]", "", $fichier);
				$fichier = str_replace("[ENG]", "", $fichier);
				$fichier = str_replace("[SRT FR]", "", $fichier);
				$fichier = str_replace("[MRPHU]", "", $fichier);
				$fichier = str_replace("[1080p HDLight]", "", $fichier);
				$fichier = str_replace("XviD-ASPHiXiAS", "", $fichier);
				$fichier = str_replace("XviD.SVR", "", $fichier);
				$fichier = str_replace("XviD-ARK01", "", $fichier);
				$fichier = str_replace("XviD-SVR", "", $fichier);
				$fichier = str_replace("TRUE.MD.WEBRip", "", $fichier);
				$fichier = str_replace("REPACK", "", $fichier);
				$fichier = str_replace("AC3-ViVi", "", $fichier);
				$fichier = str_replace("XviD", "", $fichier);
				$fichier = str_replace("2015", "", $fichier);
				$fichier = str_replace("2016", "", $fichier);
				$fichier = str_replace("2017", "", $fichier);
				$fichier = str_replace("[ www.CpasBien.io ]", "", $fichier);
				$fichier = str_replace("[Xvid DVDRip Fr]", "", $fichier);
				$fichier = str_replace("AVI", "avi", $fichier);
				$fichier = str_replace("TRUEFRENCH", "", $fichier);
				$fichier = str_replace("TRUE", "", $fichier);
				$fichier = str_replace("BDRiP", "", $fichier);
				$fichier = str_replace("XViD-SLiM", "", $fichier);
				$fichier = str_replace("Xvid-BLUB", "", $fichier);
				$fichier = str_replace("-BLUB", "", $fichier);
				$fichier = str_replace("BRRip", "", $fichier);
				$fichier = str_replace("x264-ToxiK", "", $fichier);
				
				$fichier = str_replace(".", " ", $fichier);
				$fichier = rtrim($fichier, " ");
				
				if($valider_nettoyage_extension == 1) {
					$fichier = str_replace("avi", "", $fichier);
					$fichier = str_replace("mkv", "", $fichier);
					$fichier = str_replace("mp4", "", $fichier);
					$fichier = str_replace("rar", "", $fichier);
					$fichier = str_replace("zip", "", $fichier);
					$fichier = str_replace("txt", "", $fichier);
				}
				
				return($fichier);
			}
			
			function nettoyer_extension($fichier) {
				
				
				return($fichier);
			}
			
			if(isset($_POST['valider_execution_script']) && $_POST['valider_execution_script'] == "Mettre le serveur en veille") {
				exec('mettre_en_veille.bat');
			}
			
		?>
			
			<script>

			/*
			Fonctionne 
			function fermer_onglet() {
				var fenetre = window.open('','_self');
				fenetre.close();
				exec('mettre_en_veille.bat');
			}*/
			
			</script>
			
			<center>
			
				<!-- FONTIONNE !<form>
					<input type="button" name="Close" value="Mettre le serveur en veille" onclick="fermer_onglet()" />
				</form> -->

				<form method="POST" action="index.php">
					<input type="submit" name="valider_execution_script" value="Mettre le serveur en veille" />
				</form>
				
			</center>
			
			<br /><br />
			
			<table border="0">
				<tr>
					<td>
						<font color="white" size="3">Rechercher : </font>
					</td>
					<td>
						<form action="http://www.cpasbien.io/recherche/" method="post" id="rechercher" name="rechercher">
							<input name="champ_recherche" type="text" class="recherche" value="" placeholder="Recherche ..." alt="">
					</td>
					<td>
							<input type="submit" value="Rechercher" class="valider" alt="">
						</form>
					</td>
				</tr>
			</table>
			
			<br />
			
			<font color="white" size="3">Liste des films et séries à télécharger sur le serveur</font><br />
			

			
			<!-- ----------------------------------------------------------------------------- -->
			
			<font color="white" size="3">Liste des films et séries </font> <font color="#FFA600" size="3">
			triées et à regarder </font> <font color="white" size="3">sur le serveur</font><br />
			

			
			<!-- ----------------------------------------------------------------------------- -->
			
			<font color="white" size="3">Liste des films et séries </font> <font color="#FFA600" size="3">
			à trier </font> <font color="white" size="3">sur le serveur</font><br />
			
			<?php
			
			// Define the parameters for the shell command
$location = "\\LACINEMA_HD\LaCie\Vidéos\Films";
 
// Open the directory
$dir = opendir("\\".$location);
 
 while ($file = readdir($dir)) {
        // Affichage du nom du fichier (ou sous-répertoire)
        echo "$file<br/>";
    }
     
    // C'est fini. On ferme !
    closedir($dir);
			
			?>
			
			<?php
			
			$dirname = './A trier';
			$dir = opendir($dirname);
			
			echo '<table><tr>';
			while($file = readdir($dir)) {
				if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $file != 'Thumbs.db')
				{
					echo '</tr><td><font color="#0080FF" size="4">';
					echo nettoyer($file, 1);
					echo '</font></td></tr>';
				}
			}
			echo '</table>';
			echo '<br /><br />';

			closedir($dir);
			
			?>
			
			<!-- ----------------------------------------------------------------------------- -->
			
			<font color="white" size="3">Liste des films et séries </font> <font color="#00FF04" size="3">
			en cours de téléchargement </font> <font color="white" size="3">sur le serveur</font><br />
			
			<?php
			
			$dirname = '../../En téléchargement';
			$dir = opendir($dirname);
			
			echo '<table><tr>';
			while($file = readdir($dir)) {
				if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $file != 'Thumbs.db')
				{
					echo '</tr><td><font color="#0080FF" size="4">';
					echo nettoyer($file, 1);
					echo '</font></td></tr>';
				}
			}
			echo '</table>';
			echo '<br /><br />';

			closedir($dir);
			
			?>
			
			<!-- ----------------------------------------------------------------------------- -->
			
			
			
			<font color="white" size="3">Liste des films et s�ries </font> <font color="red" size="3">
			en file d'attente </font> <font color="white" size="3">sur le serveur</font><br />
			
			<?php
			
			$dirname = '../../Sources/En t�l�chargement';
			$dir = opendir($dirname);
			
			echo '<table><tr>';
			while($file = readdir($dir)) {
				if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $file != 'Thumbs.db')
				{
					echo '</tr><td><font color="#0080FF" size="4">';
					echo nettoyer($file, 1);
					echo '</font></td></tr>';
				}
			}
			echo '</table>';
			echo '<br /><br />';

			closedir($dir);
			
			?>
		
	</body>
</html>