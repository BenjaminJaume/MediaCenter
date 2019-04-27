<?php

// Define the parameters for the shell command
$location = "\\LACINEMA_HD\LaCie\Vidéos\Films\A voir";
$user = "root";
$pass = "";
$letter = "L";
 
// Map the drive
system("net use ".$letter.": ".$location." /user:".$user." ".$pass." /persistent:no");
 
// Open the directory
$dir = opendir("\\".$location);
 
 while ($file = readdir($dir)) {
        // Affichage du nom du fichier (ou sous-répertoire)
        echo "$file<br/>";
    }
     
    // C'est fini. On ferme !
    closedir($dir);
	
?>