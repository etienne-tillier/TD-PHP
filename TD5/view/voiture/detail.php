<!DOCTYPE html>
<html>
    <body>
        <?php
            echo
        'La voiture : <br><ul>
            <li> ' . htmlspecialchars($v->getImmatriculation()) . '</li>
            <li> ' . htmlspecialchars($v->getMarque()) . '</li>
            <li> ' . htmlspecialchars($v->getCouleur()) . ' </li></ul><br>';
        ?>
    </body>
</html>
