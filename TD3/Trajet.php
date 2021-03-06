<?php
	require_once 'Model.php';
	require_once 'User.php';
	class Trajet {

		private $id;
		private $depart;
		private $arrivee;
		private $date;
		private $nbplaces;
		private $prix;
		private $conducteur_login;

		//getter générique
		public function get($nom_attribut){
			return $this->$nom_attribut;
		}

		//setter générique
		public function set($nom_attribut,$value){
			$this->$nom_attribut = $value;
		}

		public function __construct($data = NULL){
			if (!is_null($data['id']) && !is_null($data['depart']) && !is_null($data['arrivee'] && !is_null($data['date']) && !is_null($data['nbplaces'])) && !is_null($data['prix']) && !is_null($data['conducteur_login'])) {

				$this->$id = $data['$id'];
				$this->$depart = $data['$depart'];
				$this->$arrivee = $data['$arrivee'];
				$this->$date = $data['$date'];
				$this->$nbplaces = $data['$nbplaces'];
				$this->$prix = $data['$prix'];
				$this->$conducteur_login = $data['$conducteur_login'];
			}
		}


		public function afficher(){
			echo "id: " . $this->id . " depart: " . $this->depart . " arrivee: " . $this->arrivee . " date: " . $this->date . " nbplaces: " . $this->nbplaces . " prix: " . $this->prix . " conducteur_login: " . $this->conducteur_login;
		}

		public static function getAllTrajets(){
			#query est le mot clé pour requete(FR) c'est une fonction de la classe pdo qui est l'attribut contenu dans NOTRE classe Model
        	# la variable rep se retrouve avec la réponse de la base de données mais non lisible en PHP
			$rep = Model::$pdo->query("SELECT * FROM trajet");

			#On précise le mode de récupération des données contenues dans la variable $rep, on les récupère en utilisant la classe Utilisateur qui va appeler son constructeur sur chaque "tuples" et créer un objet de la classe spécifiée pour chaque tuple
    		$rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');

    		#on renvois le tableau d'objets trajet créés
    		return  $rep->fetchAll();
		}


		public static function findPassagers($id){
			$sql = 
			"SELECT u.login,u.nom,u.prenom
			FROM passager p
			JOIN utilisateur u ON p.utilisateur_login =u.login
			WHERE p.trajet_id =:trajetid
			";

    		$req_prep = Model::$pdo->prepare($sql);

		    $values = array(
		        "trajetid" => $id
		    );
    
    		$req_prep->execute($values);

    		$req_prep->setFetchMode(PDO::FETCH_CLASS, 'User');

    		#on renvois le tableau d'objets trajet créés
    		return  $req_prep->fetchAll();

		}


	}
?>