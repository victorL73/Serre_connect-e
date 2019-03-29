<!DOCTYPE html>
<html>
	<head>
		<title>Serre autonome By Victor Lerivray</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "root") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>clic ici pour acceder au site </h1>
		<li><a href="index.php" class="button primary">site !</a></li>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>

