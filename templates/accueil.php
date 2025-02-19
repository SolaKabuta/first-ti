<?php
#

// Homepage
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
            <?php
            require 'inc/banniere.php'
            ?>
        <nav>
            <?php
            require 'inc/menu.php'
            ?>
        </nav>
    </header>
    <main>
        <h1>
            Bienvenue sur notre site consacré à Rome.
        </h1>
        <img class="blason" src="../public/img/armoiries.png" alt="blason de la ville de rome">
    </main>
    <footer>
        
    </footer>
</body>
</html>

#menu en mode sticky 

#bonus : faire un bouton qui remonte en haut de page