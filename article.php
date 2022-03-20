<?php 
    include ('bdd.php'); //connexion à la base de données

    //si id existe et n'est pas vide
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $get_id = htmlspecialchars($_GET['id']); //htmlspec... convertit les caractères spéciaux en entités HTML -> sécurité supplémentaire
        $article = $bdd->prepare('SELECT * FROM blog WHERE id=?'); //prépare la requête à l'exécution
        $article->execute(array($get_id)); //exécute la requête préparée avant
        $data=$article->fetch(); //stocker la ligne/donnée dans data 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title><?php echo $data['title'];?></title> <!-- l'onglet contient le titre de l'article -->
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="article">

    <a href="blog.php"><i class="fas fa-chevron-left" style="margin-bottom:50px;"></i></a>
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
                        echo $data['content'];
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    </section>


    <?php
        include("elements/footer.php");
    ?>
    
    <script src="js/darkmode.js"></script>
</body>

</html>