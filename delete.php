<?php
   include ('bdd.php'); //connecte base de données

    $del = "DELETE FROM commentaire WHERE ID='$_POST[ID]'"; //supprime le com de l'id concerné depuis la table commentaire

    $delete= $bdd->prepare($del); //prépare requête
    $delete->execute(); //exécute requête

    header("Location: gallery.php"); //renvoie en tête de la page gallery
?>