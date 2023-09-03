<?php
    include_once '../Model/evenement.php';
    include_once '../Controller/evenementC.php';

    

    $error = "";

    // create evenement
    $evenement = NULL;

    // create an instance of the controller
    $evenementC = new evenementC();
      if (
               
                isset($_POST["nom"]) &&
                isset($_POST["date_debut"]) &&
                isset($_POST["date_fin"]) &&
		        isset($_POST["description"]) &&
                isset($_POST["id_categorie"]) &&
                isset($_POST["id_user"])   
                
    ) {
        if (
                   
                    !empty($_POST['nom']) &&
                    !empty($_POST['date_debut']) &&
                    !empty($_POST['date_fin']) &&
			        !empty($_POST['description']) &&
                    !empty($_POST['id_categorie']) &&
                    !empty($_POST['id_user'])   
                    
        ) {
            $evenement = new evenement(
                        
                        $_POST['nom'],
                        $_POST["date_debut"],
                        $_POST["date_fin"],
				        $_POST['description'],
                        $_POST["id_categorie"],
                        $_POST["id_user"]
                        
            );
            $evenementC->ajouterevenement($evenement);
            header('Location:table-evenement.php');
        }
        else
            $error = "Missing information";
    }
?>