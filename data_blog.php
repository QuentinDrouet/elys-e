<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <title>Article</title>
</head>
	<body>
        <?php
            include("elements/header.php");

            include ("bdd.php");

            //si l'input contenant submit-article est cliqué et donc existe 
            if(isset($_POST["submit-article"])) {
                //si les données existent
                if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["image"]) && !empty($_POST["title"]) && !empty($_POST["content"]) && !empty($_POST["image"])) {
                    $title = $_POST["title"];
                    $content = $_POST["content"];
                    $image = $_POST["image"];

                    $insert = $bdd ->prepare("INSERT INTO blog (title,content,image) VALUES (?,?,?)"); //prépare une requête à l'exécution
                    $insert -> execute(array($title,$content,$image)); //exécute la requête

                    header("Location: blog.php"); //renvoie à l'en tête de la page blog
                }
            }

        ?>



    <section class="form">
    <a href="blog.php"><i class="fas fa-chevron-left" style="margin-bottom:50px;"></i></a>
        <div class="wrapper">
            <h3>Create an article</h3>
            <div id="error_message">
            </div>
            <div id="validate_message">
            </div>
            <form action="" method="POST">
            <div class="input_field">
                <input type="text" placeholder="Title" id="title" name="title">
            </div>
            <div class="input_field">
                <textarea id="summernote" name="content"></textarea>
            </div> 
            <div class="input_field">
                <input type="text" placeholder="Drag image link" id="image" name="image">
            </div>
                <button class="cta" name="submit-article">Submit</button>
            </form>
        </div>

    </section>
        

    
        <?php
            include("elements/footer.php");
        ?>
        
        <!-- Code summernote wysiwyg -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
                placeholder: 'Write your article',
                
                toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
        <script src="js/darkmode.js"></script>
	</body>
</html>