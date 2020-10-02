<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8" />

        <title>cree voiture </title>

    </head>

   

    <body>

        

        <?php

        require_once('voiture.php');

        $voiture1 = new Voiture($_GET['Marque'],$_GET['Couleur'],$_GET['immatriculation']);

        $voiture1->afficher();
        
        $voiture1->save();

        ?>

    </body>

</html>