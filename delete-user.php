<?php
include ('bdd.php'); //connecte base de données

    $del = "DELETE FROM users WHERE id='$_POST[id]'"; //supprime l'user de l'id concerné depuis la table users

    $delete= $bdd->prepare($del); //prépare requête
    $delete->execute(); //exécute requête

    header("Location: admin.php"); //renvoie en tête de la page admin
?>