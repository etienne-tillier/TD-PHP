<<<<<<< HEAD
<?php
require_once 'Model.php';

class Trajet {

    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;


    public function set($nom_attribut, $valeur) {
        $this->$nom_attribut = $valeur;
    }

    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }

    public function __construct($data = null) {

        if (!is_null($data["id"]) && !is_null($data["depart"]) && !is_null($data["arrivee"]) && !is_null($data["data"]) && !is_null($data["nbplaces"]) && !is_null($data["prix"]) && !is_null($data["conducteur_login"])) {
            $this->id = $data["id"];
            $this->depart = $data["depart"];
            $this->arrivee = $data["arrivee"];
            $this->data = $data["data"];
            $this->nbplaces = $data["nbplaces"];
            $this->prix = $data["prix"];
            $this->conducteur_login = $data["conducteur_login"];
        }
    }

    public function afficher() {
        return "Trajet :  </br><ul>
				<li> id = $this->id </li></br>
				<li> depart = $this->depart </li></br>
				<li> arrivee = $this->arrivee </li></br>
				<li> date = $this->date </li></br>
				<li> nbplaces = $this->nbplaces </li></br>
				<li> prix = $this->prix </li></br>
				<li> conducteur_login = $this->conducteur_login </li></br></ul>";
    }

    public static function getAllTrajets() {
        $rep = (Model::$pdo)->query("SELECT * FROM Trajet");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_traj = $rep->fetchAll();
        return $tab_traj;
    }

    public static function findPassagers($id) {
       try{
        $sql = "SELECT * FROM Passager
                JOIN Utilisateur ON
                Utilisateur.login = Passager.utilisateur_login
                WHERE trajet_id=:id";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            "id" => $id,
        );
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $tab_pass = $req_prep->fetchAll();
        if (empty($tab_pass)){
            return false;
        }
        else{
            return $tab_pass;
        }
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    
    }
}
?>