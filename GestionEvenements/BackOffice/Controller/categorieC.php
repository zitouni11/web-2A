<?PHP
	include '../config.php';
	include_once '../Model/categorie.php';

	class categorieC {
		
		function ajoutercategorie($categorie){
			
			
			$sql="INSERT INTO categorie (nom, description) 
			VALUES (:nom,:description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					'nom' => $categorie->getNom(),
					'description' => $categorie->getdescription()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		function affichercategorie(){
			
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimercategorie($id){
			$sql="DELETE FROM categorie WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function affichercategorietri(){
			
			$sql="SELECT * FROM categorie ORDER BY nom";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function recuperercategorie($id){
			$sql="SELECT * from categorie where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				
				$query->execute();
				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercategorie($categorie,$id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						nom = :nom, 
						description = :description
						
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $categorie->getNom(),
					'description' => $categorie->getdescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>