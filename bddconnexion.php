<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost:3306;dbname=dbAmanoz;user=root;password=Enstso509');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>