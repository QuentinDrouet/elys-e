<?php
include ('bdd.php'); //connecte base de données

    $del = "DELETE FROM blog WHERE id='$_POST[id]'"; //supprime l'article de l'id concerné depuis la table blog

    $delete= $bdd->prepare($del); //prépare requête
    $delete->execute(); //exécute requête

    header("Location: blog.php"); //renvoie en tête de la page blog
?>