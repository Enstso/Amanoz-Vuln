<?php
require('sessionUser.php');

require('bddconnexion.php');
?>

<form name="formsup">
    <?php 
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $req = $bdd->prepare("Delete from article where id_article='$id'");
        $req->execute();

        header('Location: accueil.php');
    }
    ?>
</form>