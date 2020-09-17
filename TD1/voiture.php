<?php
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
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    // À compléter dans le prochain exercice
    return 'La voiture : <br><ul>
            <li> ' . $this->getImmatriculation(). '</li>
            <li> ' . $this->getMarque(). '</li>
            <li> ' . $this->getCouleur().' </li></ul><br>';
  }
}
?>

