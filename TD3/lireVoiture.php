<?php
    require_once 'Model.php';
    require_once 'voiture.php';
    
    Model::Init();
   
      /*
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach ($tab_obj as $key => $value){
        echo"voiture $key : </br>";
        echo "<ul>";
       foreach ($value as $keye => $carac){
           echo "<li>$keye = $carac </li></br>";
       }
       echo"</ul>";
       
    }
    */

    echo "Q8 </br></br>";


    foreach (voiture::getAllVoitures() as $value) {
      echo($value->afficher());
    }



?>

