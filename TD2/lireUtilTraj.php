<?php
	require_once 'Model.php';
	require_once 'utilisateur.php';
	require_once 'trajet.php';

Model::init();

echo ("test q10 </br>");

foreach(utilisateur::getAllUtilisateurs() as $value){
	echo($value->afficher());
}


echo ("test q10 suite </br>");

foreach (trajet::getAllTrajets() as $value) {
	echo($value->afficher());
}


?>