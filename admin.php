<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Admin</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="admin-page">

        <h2>User list</h2>
            <table id="user-list">
                <tr>
                    <!-- th = ligne d'en tête du tableau -->
                    <th>Name</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                <?php
                    include("bdd.php");
                    $response = $bdd->query('SELECT * FROM users'); //exécute une requête SQL de la table users
                    while($data = $response->fetch()){ //On récupère toutes les lignes
                ?>
                <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php 
                            //si le rôle du user de la session n'est pas admin 
                            if($data['role']==0){
                                echo "user"; //on affiche user dans le tableau
                            } 
                            else {
                                echo "admin"; //on affiche admin dans le tableau
                            }
                    ?></td>
                    <td><a>switch</a></td>
                    <td class="del-user" >
                        <form action="delete-user.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </table>

        <a class="cta logout" href="contact-admin.php">Contact requests</a>
        <a class="cta logout" href="disconnect.php">Logout</a>

    </section>

    <?php
        include("elements/footer.php");
    ?>

    <script src="js/darkmode.js"></script>
</body>

</html>