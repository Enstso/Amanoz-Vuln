<?php
session_start();
require_once 'bddconnexion.php';
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>