<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur de la serre</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>clic ici pour acceder au site </h1>
		<li><a href="index2.php" class="button primary">site !</a></li>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>