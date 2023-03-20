<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost:3306;dbname=dbAmanoz;user=root;password=');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>