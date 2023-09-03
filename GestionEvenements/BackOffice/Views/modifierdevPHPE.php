<?php
$id = (int)$_POST["id"];
$nom = $_POST["nom"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$description = $_POST["description"];
$id_categorie = $_POST["id_categorie"];
$id_user = $_POST["id_user"];


$con = new PDO ('mysql:host=localhost;dbname=gestion_des_evenements',"root","");
$t= $con->prepare("update evenement set nom='$nom',date_debut='$date_debut',date_fin='$date_fin',description='$description',id_categorie='$id_categorie',id_user='$id_user' where id=$id");
$result = $t->execute();
header('location:table-evenement.php');
?>