<?php
	$name = $_GET['name'];
	$message = $_GET['message'];
  $email = $_GET['email'];
	echo $name.'<br>';
	echo $message. '<br>';
	echo $email. '<br>';
	
  include ('bdd.php'); //on se connecte à la base de données

  //ajout nouveaux enregistrements sur la table contact
  $sql = "INSERT INTO contact (name, message, email)
          VALUES ('$name','$message','$email')";

  if ($bdd->query($sql) === TRUE) {
    echo "New record created successfully";
	} 
	else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
	}

  header("Location: contact.php"); //renvoie à l'en tête de la page contact
?>