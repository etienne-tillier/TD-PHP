<?php
//require_once ('../model/ModelVoiture.php'); // chargement du modèle
require_once File::build_path(array('model','ModelVoiture.php'));

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller = 'voiture';
        $view = 'list';
        $pagetitle='Liste des voitures';
        require File::build_path(array('view','view.php'));
    }
    
    public static function read() {
        $immat = $_GET["immat"];
        $v = ModelVoiture::getVoitureByImmat($immat);
        $controller = 'voiture';
        if ($v == null){
            $pagetitle = 'Voiture non trouvée';
            $view = 'error';
            require File::build_path(array('view','view.php'));
        }
        else{
            $pagetitle = 'Voiture en détail';
            $view = 'detail';
            require File::build_path(array('view','view.php'));
        }
        
    }
    
    public static function create(){
        $controller = 'voiture';
        $view = 'create';
        $pagetitle='Création de voiture';
        require File::build_path(array('view','view.php'));
    }
    
    public static function created(){
        $voit = new ModelVoiture($_GET["Marque"],$_GET["Couleur"],$_GET["immatriculation"]);
        $voit->save();
        ControllerVoiture::readAll();
    }
}
?>
