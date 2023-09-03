<?PHP
	class evenement{
		
		
		private  $nom= null;
		private  $date_debut= null;
		private  $date_fin = null;
        private  $description = null;
        private  $id_categorie = null;
        private  $id_user = null;
		
		function __construct($nom,  $date_debut,  $date_fin, $description,$id_categorie,$id_user){
			
			$this->nom=$nom;
			$this->date_debut=$date_debut;
			$this->date_fin=$date_fin;
            $this->description=$description;
			$this->id_categorie=$id_categorie;
            $this->id_user=$id_user;
			
		}
		
		function getid_user() {
			return $this->id_user;
		}

        function getid_categorie() {
			return $this->id_categorie;
		}
		function getdate_debut() {
			return $this->date_debut;
		}
		function getdescription(){
			return $this->description;
		}
		function getnom(){
			return $this->nom;
		}
		function getdate_fin() {
			return $this->date_fin;
		}
		function setid_user($id_user) {
			$this->id_user=$id_user;
		}
		function setid_categorie($id_categorie) {
			$this->id_categorie=$id_categorie;
		}
		function setdate_debut(date $date_debut) {
			$this->date_debut=$date_debut;
		}
        function setdescriptopn(string $description) {
			$this->description=$description;
		}
		function setnom(string $nom) {
			$this->nom=$nom;
		}
		function setdate_fin(date $date_fin) {
			$this->date_fin=$date_fin;
		}
		
		
	}
?>