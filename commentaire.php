<?php
	$name = $_GET['name'];
	$subject = $_GET['subject'];
	$time = date('Y-m-d H:i:s');
	echo $name.'<br>';
	echo $subject. '<br>';
	echo $time. '<br>';
	
	include ('bdd.php'); //on se connecte à la base de données

	//ajout nouveaux enregistrements sur la table commentaire
    $sql = "INSERT INTO commentaire (pseudo, commentaire, date) 
            VALUES ('$name','$subject','$time')";

    if ($bdd->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $bdd->error;
	}

  	header("Location: gallery.php"); //renvoie à l'en tête de la page gallery
?>