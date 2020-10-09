<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Details de la voiture</title>
    </head>
    <body>
        <?php
            echo
        'La voiture : <br><ul>
            <li> ' . $v->getImmatriculation() . '</li>
            <li> ' . $v->getMarque() . '</li>
            <li> ' . $v->getCouleur() . ' </li></ul><br>';
        ?>
    </body>
</html>
