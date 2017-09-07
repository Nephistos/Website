       

<!DOCTYPE html>

<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>




<?php

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['mdp']) OR $_POST['mdp'] != "kangourou")
{
    ?> <p>
     Veuillez taper le code :
    </p>

<form action="admin.php" method="post">
<p>
    <input type="text" name="mdp" />
    <input type="submit" value="Valider" />
</p>
</form> <?php
}
// Le mot de passe a été envoyé et il est bon
else
{
    // Afficher les codes secrets
    $monfichier = fopen('compteur_visites.txt', 'r+'); 
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    fclose($monfichier); 
    echo '<p>Ce site a été vu ' . $pages_vues . ' fois !</p>';


        
}

?>
       
</body>
</html>



