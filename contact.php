<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Contact the presidency</title>
</head>

<body>
    <?php
        include("elements/header.php");
    ?>
    
    <section class="form">

        <div class="wrapper">
            <h3>Contact us</h3>
            <div id="error_message">
            </div>
            <div id="validate_message">
            </div>
            <form action="contact_ask.php" method="GET" id="" onsubmit = "return validate();"> 
            <div class="input_field">
                <input type="text" placeholder="Name" id="name" name="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" id="email" name="email">
            </div>
            <div class="input_field">
                <textarea placeholder="Message" id="message" name="message"></textarea>
            </div>
            <button class="cta">Submit</button>
            </form>
        </div>

    </section>
        

        <?php
            include("elements/footer.php");
        ?>
        <script src="js/form.js"></script>
        <script src="js/darkmode.js"></script>
	</body>
</html>