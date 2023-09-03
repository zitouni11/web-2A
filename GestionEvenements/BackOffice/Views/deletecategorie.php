<?php
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=gestion_des_evenements',"root","");
    $t= $con->prepare("delete from categorie where id=?");
$t ->execute (array($_GET["rep"]));
header('location:table-categorie.php');
}
?>