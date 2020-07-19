<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription / Connexion Etudiant</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
<!---------------------------------Inscription & Headline----------------------------------------->

	<?php require_once('../includesPhp/Inscription.php') ?>

<!---X--------------------------------------------------------------X---------------->

<!---------------------------------Connexion----------------------------------------->

	<?php require_once('../includesPhp/Connexion.php') ?>

<!---X--------------------------------------------------------------X---------------->

<!---------------------------------Message de bienvenue (Connexion)----------------------------------------->

	<?php require_once('../includesPhp/BienvenueConn.php') ?>

<!---X---------------------------------------------------------------------------------------X---------------->

<!---------------------------------Message de bienvenue (Inscription)----------------------------------------->

	<?php require_once('../includesPhp/BienvenueInscris.php') ?>
	
<!---X---------------------------------------------------------------------------------------X---------------->

<!--fichier javascript externe-->
<script src="js/main.js"></script>


</body>

</html>