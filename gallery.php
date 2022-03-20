<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Gallery</title>
</head>

<body>

    <?php
        include("elements/header.php");
    ?>

    <section class="galleryBox">

        <h2 class="second-title">Gallery of the Elysée Palace</h2>

        <div class="gallery">
            <ul>
                <li class="list active" data-filter="all">All</li>
                <li class="list" data-filter="exterior">Exterior</li>
                <li class="list" data-filter="interior">Interior</li>
                <li class="list" data-filter="garden">Garden</li>
            </ul>
            <div class="photos">
                <div class="item exterior"><img src="images/gallery/elysee_out_red_carpet.jpg" alt=""></div>
                <div class="item exterior"><img src="images/gallery/elysee_out_night.jpg" alt=""></div>
                <div class="item exterior"><img src="images/gallery/elysee_out_entrance.jpg" alt=""></div>
                <div class="item interior"><img src="images/gallery/elysee_in_macron.jpg" alt=""></div>
                <div class="item interior"><img src="images/gallery/elysee_in_diner.jpg" alt=""></div>
                <div class="item interior"><img src="images/gallery/elysee_in_bureau.jpg" alt=""></div>
                <div class="item garden"><img src="images/gallery/elysee_garden_plant.jpg" alt=""></div>
                <div class="item garden"><img src="images/gallery/elysee_garden_interior.jpg" alt=""></div>
                <div class="item garden"><img src="images/gallery/elysee_garden_back.jpg" alt=""></div>
            </div>
        </div>

        <hr>

        <div class="wrapper">
            <h3>Comment</h3>
            <form action="commentaire.php">
            <div class="input_field">
                <input input type="text" id="name" name="name" placeholder="Name" required="required">
            </div>
            <div class="input_field">
                <textarea placeholder="Message" id="subject" name="subject" required="required"></textarea>
            </div>
            <button class="cta">Submit</button>
            </form>
        </div>

        <?php
            include("bdd.php"); //connecte base de données
            $response = $bdd->query('SELECT * FROM commentaire ORDER BY id DESC'); 
            while($data = $response->fetch()){ //récupère toutes les lignes
        ?>
        <div class="commentBox">
            <div class="pseudo"> <?php echo "From ".$data['pseudo']." :"; ?> </div>
            <div class="comment"> <?php echo $data['commentaire']; ?> </div>
            <div class="date"> <?php echo $data['date']; ?> </div>
            <form action="delete.php" method="POST">
                <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                <?php 
                    if(array_key_exists('role',$_SESSION)){ //affiche que si clé existe dans tableau
                    if($_SESSION['role'] == 1){ //si user de la session admin
                ?>
                <input class="cta" type="submit" value="Delete">
                <?php 
                    }}
                ?>
            </form>
        </div>  
        
        <?php
            }
        ?>

        </section>

        <?php
            include("elements/footer.php");
        ?>

        <script src="js/gallery.js"></script>
        <script src="js/darkmode.js"></script>
	</body>
</html>