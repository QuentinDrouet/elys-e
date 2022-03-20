
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Contact requests</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="admin-page">

    <a href="admin.php"><i class="fas fa-chevron-left"></i></a>

    <?php
        include("bdd.php"); //connecte à la base données
        $response = $bdd->query('SELECT * FROM contact'); //exécute requête SQL 
        while($data = $response->fetch()){ //On récupère toutes les lignes
    ?>
    <div class="commentBox">
        <div class="pseudo"> <?php echo "From ".$data['name']." :"; ?> </div>
        <div class="comment"> <?php echo $data['message']; ?> </div>
        <div class="date"> <?php echo $data['email']; ?> </div>
    </div>
    <?php 
        }
    ?>

    </section>


    <?php
        
        include("elements/footer.php");
    ?>

    <script src="js/darkmode.js"></script>
</body>

</html>