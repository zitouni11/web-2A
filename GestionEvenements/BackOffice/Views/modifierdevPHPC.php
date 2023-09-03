<?php
$id = (int)$_POST["id"];
$nom = $_POST["nom"];
$description = $_POST["description"];


$con = new PDO ('mysql:host=localhost;dbname=gestion_des_evenements',"root","");
$t= $con->prepare("update categorie set nom='$nom',description='$description' where id=$id");
$result = $t->execute();
header('location:table-categorie.php');
?>