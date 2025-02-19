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
        <?php
        require 'inc/menu.php'
        ?>
    </header>
    <main>
        <div class="subtitle-container">
            <h2>
                Erreur 404
            </h2>
        </div>
        <div class="blason">
            <img id="error-img" src="img/404.jpg" alt="404 img">
        </div>
        <div class="err-container">
            <p class="err-message">
                Oops ! Page introuvable
            </p>
            <a href="./">Cliquez ici pour revenir en arrière</a>
        </div>
    </main>
</body>

</html>