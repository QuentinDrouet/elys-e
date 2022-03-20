<?php 
    include ("bdd.php"); //connecte à la base de données

    //si l'input contenant register est cliqué et donc existe
    if(isset($_POST['register'])) {
        //si les variables existent et qu'elles ne sont pas vides
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
        {
            //initialise variables 
            $name = htmlspecialchars($_POST['name']);
            $email = strtolower(htmlspecialchars($_POST['email']));
            $password = htmlspecialchars($_POST['password']);
            $password_retype = htmlspecialchars($_POST['password_retype']);
    
            //si l'user est inscrit à la table users
            $check = $bdd->prepare('SELECT * FROM users WHERE email = ?'); //prépare requête
            $check->execute(array($email)); //exécute la requête
            $data = $check->fetch(); //récupère la ligne suivante
            $row = $check->rowCount(); //nombre de ligne affectée
            
            //si user existe pas 
            if($row == 0){ 
                if(strlen($name) <= 20){ //longeur du nom
                    if(strlen($email) <= 30){ //longueur de email
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //si l'email est de format valide
                            if($password === $password_retype){ // si les deux mdp saisis sont bon
    
                                //on hash le mot de passe 
                                $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
                                //on insère dans la base de données
                                $insert = $bdd->prepare('INSERT INTO users(name, email, password,role) VALUES(?, ?, ?, ?)'); //prépare requête
                                $insert->execute(array($name,$email,$password_hash,0)); //exécute la requête
    
                                //renvoie à l'en tête de la page register avec le message de succès
                                header('Location:register.php?reg_err=success');
                            }else{ header('Location: register.php?reg_err=password');}
                        }else{ header('Location: register.php?reg_err=email');}
                    }else{ header('Location: register.php?reg_err=email_length');}
                }else{ header('Location: register.php?reg_err=name_length');}
            }else{ header('Location: register.php?reg_err=already');}
        }
    }


?>