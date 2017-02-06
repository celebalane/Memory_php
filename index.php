<?php
	$tab = array("img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg");
	$dos = 'img/dos.png';
	shuffle($tab); //Mélange tableau
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jeux-des-paires</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript"> 
		var tab = [ <?php                                   //Ecriture de la variable tab pour le javascript
		foreach ($tab as $index => $case) {               //Pour chaque case du tableau $tab
			echo '"'. $case . '"';                        //Ecris dans la variable : "$case"
				if ($index != 13){                        //Si l'index du tableau est différent de 13
					echo ',';                             // Alors on écris la virgule après "$case", sinon pas de virgule
				}
					}?>
				];
 		
	</script>
</head>
<body>
	<div id="titre">
		<h1>JEU DES PAIRES</h1>
	</div>
	<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
	<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
	<span id="chronotime">00:00</span>
	<div id="photo"> 
		<!--ici PHP--> 

			<?php

			for($i=0; $i<=count($tab) -1 ; $i++) { //Boucle pour afficher 14 fois les photos de dos
					echo "<img src=" . $dos . " class='photo' onclick='choisir(" . $i . ")' draggable='false'>";
					//écriture des balises images pour l'affichage de dos'
			}

			echo "<form method='get' action='index.php'><p>Pseudo : <input id='joueur' type='text' name='nomJoueur' /></p></form>"; //Ecriture du champ pour récuperer le nom du joueur

			if (isset($_GET['nomJoueur'])) { //Si un nom de joueur est renseigné
				echo "<br /><div><input id='recommence' type='button' class='restart' value='Recommencer' onClick='RedirectionJavascript()''/></div>";//Ecriture bouton recommencer qui appel la fonction reload de la page
			}
			?>
 		<!--ici lien javascript--> 
		<script type="text/javascript" src="js/script.js"></script>
	</div>
</body>
</html>