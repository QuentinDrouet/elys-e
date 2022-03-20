<!DOCTYPE html>
<html lang="en">
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Our blog</title>
	</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="blog">

        <?php 
            if(array_key_exists('role',$_SESSION)){ //affiche que si clé existe dans tableau
                if($_SESSION['role'] == 1){
        ?>
        <a class="cta logout" href="data_blog.php">Create an article</a>    
        <?php 
            }}
        ?>

        <div class="all">
            <?php
                include("bdd.php");
                $response = $bdd->query('SELECT * FROM blog ORDER BY id DESC'); //exécute requête SQL / order by... : id croissant
                while($data = $response->fetch()){ //On récupère toutes les lignes
            ?>

            <div class="blog-section">
                <div class="blog-card">
                    <div class="blog-image"><img src="<?php echo $data['image'];?>" alt=""></div> 
                    <div class="blog-content">
                    <div class="blog-title">
                        <?php 
                            echo $data['title'];
                        ?>
                    </div>
                    <div class="blog-message">
                        <?php 
                            echo (substr(strip_tags($data['content']),0,100))."..."; //affiche les 50 premiers commentaires du message de l'article
                        ?>
                    </div>
                    <a class="see-more" href="article.php?id=<?= $data['id'] ?>">See more</a> <!-- on veut l'id récupéré sur la base données -->
                    <form action="delete-blog.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <?php 
                            if(array_key_exists('role',$_SESSION)){ //affiche que si clé existe dans tableau
                            if($_SESSION['role'] == 1){ //si l'user de la session est admin
                        ?>
                        <input class="cta" type="submit" value="Delete">
                        <?php 
                            }}
                        ?>
                    </form>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>

    </section>
        

    
        <?php
            include("elements/footer.php");
        ?>

        <script src="js/darkmode.js"></script>
	</body>
</html>