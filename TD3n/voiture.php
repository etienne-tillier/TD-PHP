<?php

 require_once 'Model.php';
        
class Voiture {
   


  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

  public function getImmatriculation(){
    return $this->immatriculation;
  }

  public function setImmatriculation($immatriculation2){
    if (strlen($immatriculation2)>8){
      echo "Il y a trop de caractères pour cette immatriculation (limité à 8)";
    }
    else {
    $this->immatriculation = immatriculation2;
  }
  }
      
  // un constructeur
  /*
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
  */
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}
           
  // une methode d'affichage.
  public function afficher() {
    // À compléter dans le prochain exercice
    return 'La voiture : <br><ul>
            <li> ' . $this->getImmatriculation(). '</li>
            <li> ' . $this->getMarque(). '</li>
            <li> ' . $this->getCouleur().' </li></ul><br>';
  }

  public static function getAllVoitures(){
      
       try{
         $rep = (Model::$pdo)->query("SELECT * FROM Voiture");
         $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
         $tab_voit = $rep->fetchAll();
         return $tab_voit;
            }   
            catch(PDOException $e) {
                echo $e->getMessage();
            }
  }

  public static function getVoitureByImmat($immat) {
      
    try{
    $sql = "SELECT * from Voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête	 
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false;
    return $tab_voit[0];
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

public function save(){
    try{
    $marque = $this->getMarque();
    $couleur = $this->getCouleur();
    $immat = $this->getImmatriculation();
    $sql = "INSERT INTO Voiture(immatriculation,marque,couleur) VALUES('$immat','$marque','$couleur')";
    
    (Model::$pdo)->query($sql);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
}

}
?>

