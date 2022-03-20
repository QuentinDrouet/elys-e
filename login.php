<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Login</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

        
    <section class="form">

        <div class="wrapper">
            <h3>Login</h3>
            <div>
            <?php 
                //si l'erreur existe
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    //au lieu de faire pleins de elseif
                    switch($err) 
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> invalid password
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> invalid email
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> non-existent account
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            </div>

            <form action="data_login.php" method="POST">
            <div class="input_field">
                <input type="email" name="email" placeholder="Email" required="required">
            </div>
            <div class="input_field">
                <input type="password" name="password" placeholder="Mot de passe" required="required">
            </div>
            <button class="cta">Login</button>
            <p>Need an account?<a href="register.php"> Register</a></p>
            </form>
        </div>

    </section>

    <?php
        include("elements/footer.php");
    ?>

    <script src="js/darkmode.js"></script>
</body>

</html>