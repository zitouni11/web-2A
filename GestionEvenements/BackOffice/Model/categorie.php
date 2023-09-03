<?PHP
	class categorie{
		private  $id = null;
		private  $nom = null;
		private  $description= null;
		
		
		function __construct( $nom,  $description){
	
			$this->nom=$nom;
			$this->description=$description;
			
		}
		
		function getid() {
			return $this->id;
		}
		function getNom() {
			return $this->nom;
		}
		
		function getdescription(){
			return $this->description;
		}
	

		function setNom( $nom) {
			$this->nom=$nom;
		}
		function setdescription( $description) {
			$this->description;
		}
	
	}
?>