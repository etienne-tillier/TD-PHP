<?php
    require_once 'Model.php';
    
    Model::Init();
   
    $rep = (Model::$pdo)->query("SELECT * FROM Voiture");
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach ($tab_obj as $key => $value){
        echo"voiture $key : </br>";
        echo "<ul>";
       foreach ($value as $keye => $carac){
           echo "<li>$keye = $carac </li></br>";
       }
       echo"</ul>";
       
    }



?>

