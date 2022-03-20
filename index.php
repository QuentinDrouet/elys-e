
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>The Elysée Palace</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="landing-page">

        <div class="left">
            <h1 class="title">The Elysée Palace</h1>
            <p class="msg">Seat of the Presidency of the Republic.</p>
            <a class="cta" href="history.php">Learn More</a>
        </div>

        <div class="right">
            <img id="elysee-draw" src="images/palais_dessin.png" alt="Official drawing of the Elysée Palace">
        </div>

    </section>

    <section class="discover">

            <h2 class="second-title">Discover the Elysée Palace</h2>
            <div class="discover-paragraph">
                <p>
                    The Élysée Palace, known as the Élysée, is a former Parisian mansion, located at no 55 rue du Faubourg-Saint-Honoré, 
                    in the 8th arrondissement of Paris. It is the seat of the Presidency of the French Republic and the official residence 
                    of the President of the Republic since the Second Republic. Its current resident is Emmanuel Macron, President of the 
                    French Republic since May 14, 2017.
                </p>
            </div>

    </section> 

    
    <section class="map-i">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3565376526726!2d2.3143779155554607!3d48.870479379288604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fce8ca6e347%3A0x2e38f4467a582f22!2sLe%20Palais%20de%20L&#39;%C3%89lys%C3%A9e!5e0!3m2!1sfr!2sfr!4v1618087889159!5m2!1sfr!2sfr" 
        style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
    </section>
        
    
        
        
    <?php
        include("elements/footer.php");
    ?>

    <script src="js/darkmode.js"></script>
</body>

</html>