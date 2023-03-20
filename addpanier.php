<?php
require('sessionUser.php');

require('bddconnexion.php');
?>

<?php 
$idArticle = $_GET['id'];
$idUser = $_SESSION['id'];
$req = $bdd->prepare("Insert Into Panier (num_article,num_utilisateur,passer) values('$idArticle','$idUser',0)");
$req->execute();
header('Location: panier.php');
?>