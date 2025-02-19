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
                Galerie photo
            </h2>
        </div>
        <div class="gallery">
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
        </div>
        <div class="gallery">
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
        </div>
        <div class="gallery">
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
            <div class="card">
                <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="marcus aurelius statue pic">
                <p>Marcus Aurelius</p>
            </div>
        </div>
</body>

</html>