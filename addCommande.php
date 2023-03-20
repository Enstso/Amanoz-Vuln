<?php
require('sessionUser.php');

require('bddconnexion.php');


?>

<?php 
    $id= $_GET['id'];
    $req = $bdd->prepare("Update Panier set passer=1 where '$id'");
    $req->execute();
    header('Location:accueil.php')
?>