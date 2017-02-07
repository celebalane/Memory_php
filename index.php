<?php
	$tab = array("img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg");
	$dos = 'img/dos.png';
	$nomJoueur;
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
	<?php
		if(isset($_GET["nomJoueur"]) && isset($_GET["min"]) && isset($_GET["sec"])){
			if ($_GET["nomJoueur"] != ""){
				echo '<h1>VICTOIRE</h1><input type="button" name="restart" value="recommencer" onclick="relance()"/>';
			}
			else { echo "<p>Erreur : vous n'avez pas rentré votre pseudo<br />On recommence!</p>";}
		}
	?>
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

			?>
	
	</div>
 		<!--ici lien javascript--> 
		<script type="text/javascript" src="js/script.js"></script>
	</div>
</body>
</html>