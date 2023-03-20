<?php
require('sessionUser.php');

require('bddconnexion.php');
?>

<form name="formsup">
    <?php 
    if(isset($_GET['id_panier'])){
        
        $idPanier= $_GET['id_panier'];
        $req = $bdd->prepare("Delete from Panier where id_panier='$idPanier'");
        $req->execute();
        header('Location: accueil.php');
    }
    ?>
</form>