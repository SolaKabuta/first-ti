<?php

#
//  Contrôleur frontal
if (isset($_GET['p'])) {
    switch($_GET['p']) {
        case 'geographie':
            $title = 'geographie';
            include '../templates/geographie';
            break;
    }
} else {
    $title = 'accueil';
    include '../templates/accueil.php';
}