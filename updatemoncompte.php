<?php

require('sessionUser.php');

require('bddconnexion.php');

if (!empty($_POST['user']) and !empty($_POST['password']) and $_POST['email']) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];
    $req = $bdd->prepare("Update Utilisateur set username='$user',password='$password',email='$email' where id_utilisateur=$id  ");
    $req->execute();
    
    header('Location:deconnexion.php');
}
