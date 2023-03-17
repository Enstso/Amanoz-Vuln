<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=dbAmanoz;user=root;password=');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>