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
            <h2>Bienvenue sur notre site consacré à Rome.</h2>
        </div>
        <div id="link-img" class="blason">
            <img src="img/liens.jpg" alt="blason de la ville de rome">
        </div>
        <!-- LINKS LIST -->
        <div class="summary links">
            <div class="links-list">
                <ul>
                    <li><a href="#">Berlin</a></li>
                    <li><a href="#">Vienne</a></li>
                    <li><a href="#">Paris</a></li>
                    <li><a href="#">Madrid</a></li>
                    <li><a href="#">Rome</a></li>
                    <li><a href="#">Londres</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Berlin</a></li>
                    <li><a href="#">Vienne</a></li>
                    <li><a href="#">Paris</a></li>
                    <li><a href="#">Madrid</a></li>
                    <li><a href="#">Rome</a></li>
                    <li><a href="#">Londres</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Berlin</a></li>
                    <li><a href="#">Vienne</a></li>
                    <li><a href="#">Paris</a></li>
                    <li><a href="#">Madrid</a></li>
                    <li><a href="#">Rome</a></li>
                    <li><a href="#">Londres</a></li>
                </ul>
            </div>
        </div>
</body>

</html>