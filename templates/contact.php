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
                Pour nous contacter
            </h2>
        </div>
        <div class="blason">
            <img id="contact-img" src="img/contacts.jpg" alt="form image">
        </div>

        <div id="form">
        <form action="">
            <fieldset>
                <label for="">Nom :</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <label for="">Prenom :</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <label for="">Ville :</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <label for="">Email :</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <label for="">Commentaires :</label>
                <textarea name="" id="">

                </textarea>
            </fieldset>
            <input type="submit" value="Submit">
        </form>
        </div>

</body>

</html>