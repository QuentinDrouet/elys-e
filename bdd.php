<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=commentaire;charset=utf8', 'root', 'root');
        //méthode PDO pour connecter à la base de données / encodage, login, mdp
    }
    //s'il y a une erreur
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>