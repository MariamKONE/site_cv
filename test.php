<!-- <?php
//require '../connexion/connexion.php'
//se connecter
?> -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Test connection</title>
        <link rel="stylesheet" href="/site_cv/admin/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
    </head>
    <body>
        <?php
            $sql = $pdoCV->query(" SELECT * FROM utilisateurs ='1' ");
            $ligne = $sql ->fetch();//siginifie 'récupérer'
         ?>
        <p>Coucou !<?php echo $ligne['prenom'],''.$ligne['nom'];?></p>

    </body>
</html>
