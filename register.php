<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Register</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>

    <section class="form">

        <div class="wrapper">
            <h3>Register</h3>
            <div>
            <?php 
                //si l'erreur existe
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
                    
                    //au lieu de faire pleins de elseif
                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Success</strong> you are registered!
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> different passwords
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

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> email too long
                            </div>
                        <?php 
                        break;

                        case 'name_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> name too long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> already existing account
                            </div>
                        <?php 
                    }
                }
                ?>
            </div>
            <form action="data_register.php" method="POST">
                <div class="input_field">
                    <input type="text" name="name" placeholder="Name" required="required">
                </div>
                <div class="input_field">
                    <input type="email" name="email" placeholder="Email" required="required">
                </div>
                <div class="input_field">
                    <input type="password" name="password" placeholder="Password" required="required">
                </div>
                <div class="input_field">
                    <input type="password" name="password_retype" placeholder="Confirm password" required="required">
                </div>
                <button class="cta" name='register'>Register</button>
                <p>Already have an account?<a href="login.php"> Login</a></p>
            </form>
        </div>

    </section>

    <?php
        include("elements/footer.php");
    ?>
    <script src="js/darkmode.js"></script>
</body>

</html>