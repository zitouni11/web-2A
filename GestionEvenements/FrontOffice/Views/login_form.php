<?php
    
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    $error = "";
    $User = null;

    // create an instance of the controller
    $UserController = new UserController();
    if (
        isset($_POST["email"]) &&
        isset($_POST["pass"])
    ) {
        if (!empty($_POST["email"]) && 
            !empty($_POST["pass"])
        ) {
            $UserController->loginUser($_POST['email'], $_POST['pass']);
            header('Location:../tryme/index.html');
        }
        
        else
            $error = "Missing information";
            echo $error;
    }

    
?>