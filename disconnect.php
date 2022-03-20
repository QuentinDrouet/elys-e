<?php 
    session_start(); //demarrage de la session
    session_destroy(); //on détruit la session
    header('Location:login.php'); //renvoie à l'en tête de la page login
?>