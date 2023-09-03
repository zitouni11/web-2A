<?php
    include_once '../Model/categorie.php';
    include_once '../Controller/categorieC.php';

    

    $error = "";

    // create categorie
    $categorie = NULL;

    // create an instance of the controller
    $categorieC = new categorieC();
      if (
             
                isset($_POST["nom"]) &&
		        isset($_POST["description"])  
                
    ) {
        if (
                   
                    !empty($_POST['nom']) &&
			        !empty($_POST["description"])  
                    
        ) {
            $categorie = new categorie(
                        
                        $_POST['nom'],
				        $_POST['description']
                        
            );
            $categorieC->ajoutercategorie($categorie);
            header('Location:table-categorie.php');
        }
        else
            $error = "Missing information";
    }

?>