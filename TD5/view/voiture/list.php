<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v)
             echo  '<p> Voiture d\'immatriculation '. '<a href="https://webinfo.iutmontp.univ-montp2.fr/~tilliere/PHP/TD-PHP/TD5/index.php?action=read&immat='.rawurlencode($v->getImmatriculation()).'">' . htmlspecialchars($v->getImmatriculation()) . '</a>'
        ?>
    </body>
</html>
