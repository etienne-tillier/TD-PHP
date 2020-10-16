<<<<<<< HEAD
<?php

	require_once 'Model.php';

	class Utilisateur{

		private $login;
		private $nom;
		private $prenom;

	public function getLogin(){
		return $this->login;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setNom($nom2){
		$this->nom = $nom2;
	}

	public function setLogin($login2){
		$this->login = $login2;
	}

	public function setPrenom($prenom2){
		$this->prenom = $prenom2;
	}

	public function afficher(){
		return "<ul>Utilisateur : </br></br>
				<li> login : $this->login </li></br>
				<li> prenom : $this->prenom </li></br>
				<li> nom : $this->nom </li></br></ul>";
	}			
	
	public static function getAllUtilisateurs(){
		$rep = (Model::$pdo)->query("SELECT * FROM Utilisateur");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
    	$tab_util = $rep->fetchAll();
    	return $tab_util;
		}


}

?>