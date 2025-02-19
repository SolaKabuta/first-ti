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
                <img src="img/480px_Fontana_de_Trevi.jpg" alt="Fontana de Trevi">
                <p>Fontana de Trevi</p>
            </div>
        </div>
        <div class="gallery">
            <div class="card">
                <img src="img/480px_Pantheon_Rome.jpg" alt="Pantheon">
                <p>Pantheon</p>
            </div>
            <div class="card">
                <img src="img/480px_Piazza_Navona.jpg" alt="Piazza Navona">
                <p>Piazza Navona</p>
            </div>
        </div>
        <div class="gallery">
            <div class="card">
                <img src="img/480px_Pont_Saint-Ange_et_le_Vatican.jpg" alt="Pont Saint Ange pic">
                <p>Saint Ange & Vatican</p>
            </div>
            <div class="card">
                <img src="img/480px_Quirinale_palazzo_e_obelisco.jpg" alt="Palazzo pic">
                <p>Palazzo</p>
            </div>
        </div>
</body>

</html>