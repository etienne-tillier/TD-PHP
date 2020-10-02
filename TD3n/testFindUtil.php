<?php
require_once 'Model.php';
require_once 'utilisateur.php';
require_once 'trajet.php';


Model::Init();

foreach (trajet::findPassagers($_GET['Trajet']) as $value){
    echo $value->afficher();
    
}

?>

