<?php
    session_start(); //on lance la session dans le header car il est include dans toutes les pages
?>

<header>
    <a href="index.php"><img id="elysee-logo" src="images/logo_elysee.png" alt="Logo of the Elysée Palace" title="Logo of the Elysée Palace"></a>
    <nav class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php 
            if(isset($_SESSION['name']) && $_SESSION['role']==0){ //si l'user de la session ouverte existe et n'est pas admin
        ?>
        <li><a href="disconnect.php"> <?php echo "Logout"; ?></a></li> <!-- alors il peut se logout depuis le header -->
        <?php 
            }
            elseif(isset($_SESSION['name']) && $_SESSION['role']==1){ //si l'user existe et est admin
        ?>
        <li><a href="admin.php"> <?php echo "Admin"; ?></a></li> <!-- alors il a accès à la page de gestion admin -->
        <?php }else{ ?> <!-- sinon, l'user n'est pas login -->
        <li><a href="login.php">Login</a></li> <!-- il voit donc login dans le header -->
        <?php } ?>
        <li id="dark-mode-toggle"><a href=""><i class="fas fa-sun sun"></i></a></li> <!-- icon dark theme -->
    </nav>
    
    <div class="burger-toggle" onclick="$('.nav-burger').slideToggle(100);"> <!-- apparition menu burger avec un mouvement de glissement en 100ms -->
        <i class="fas fa-bars nav-icon"></i>
    </div>
</header>

<nav class="nav-burger"> <!-- menu burger, mêmes commentaires que le menu au dessus -->
        <li><a href="index.php">Home</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php 
            if(isset($_SESSION['name'])){
        ?>
        <li><a href="disconnect.php"> <?php echo "Logout"; ?></a></li>
        <?php }else{ ?>
        <li><a href="login.php">Login</a></li>
        <?php } ?>
        <li id="dark-mode-toggle"><a href=""><i class="fas fa-sun sun"></i></a></li>
</nav>