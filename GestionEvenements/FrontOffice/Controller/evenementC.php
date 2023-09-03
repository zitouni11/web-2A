<?PHP
	include '../config.php';
	include_once '../Model/evenement.php';

	class evenementC {
		
		function ajouterevenement($evenement){
			$db = config::getConnexion();
			
			$sql="INSERT INTO evenement (nom,  date_debut,  date_fin, description, id_categorie, id_user) 
			VALUES (:nom,:date_debut,:date_fin,:description,:id_categorie,:id_user)";
			
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					'nom' => $evenement->getnom(),
					'date_debut' => $evenement->getdate_debut(),
					'date_fin' => $evenement->getdate_fin(),
                    'description' => $evenement->getdescription(),
                    'id_categorie' => $evenement->getid_categorie(),
					'id_user' => $evenement->getid_user()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function afficherevenementtri1(){
			
			$sql="SELECT * FROM evenement ORDER BY nom";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		
		function afficherevenement(){
			
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimerevenement($id_user){
			$sql="DELETE FROM evenement WHERE id_user= :id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user',$id_user);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevenement($evenement,$user){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						nom = :nom, 
						date_debut = :date_debut,
                        date_fin   = :date_fin,
                        description = :description,
						id_categorie = :id_categorie,
						
					WHERE id_user = :id_user'
				);
				$query->execute([
					'nom' => $evenement->getnom(),
					'date_debut' => $evenement->getdate_debut(),
					'date_fin' => $evenement->getdate_fin(),
					'description' => $evenement->getdescription(),
                    'id_categorie' => $evenement->getid_categorie(),
					'id_user' => $id_user
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>