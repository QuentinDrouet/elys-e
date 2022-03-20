<?php 
    session_start();

    include ('bdd.php'); //connecte à la base de données

    //si les données existent
    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); //email transformé en minuscule
        
        //si l'user est inscrit à la table users
        $check = $bdd->prepare('SELECT * FROM users WHERE email = ?'); //prépare requête
        $check->execute(array($email)); //exécute la requête
        $data = $check->fetch(); //récupère la ligne suivante
        $row = $check->rowCount(); //nombre de ligne affectée 
        
        

        //si l'user existe
        if($row > 0)
        {
            //si l'email est d'un format valide
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //si le mdp est le bon
                if(password_verify($password, $data['password']))
                {
                    //variables de session accessible partout où la session est ouverte
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['role'] = $data['role'];
                    header('Location: index.php'); // renvoie sur l'en tête de l'index
                }else{ header('Location: login.php?login_err=password');  } 
            }else{ header('Location: login.php?login_err=email');  }
        }else{ header('Location: login.php?login_err=already'); } 
    }else{ header('Location: login.php');} //si le form est vide

?>