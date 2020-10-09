<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET["action"];

// Appel de la méthode statique $action de Co&immat=7854123ntrollerVoiture
ControllerVoiture::$action(); 
?>
