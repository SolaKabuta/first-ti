<?php

#
// View controller
if (isset($_GET['p'])) {
    switch($_GET['p']) {
        case 'geographie':
            $title = 'geographie';
            include '../templates/geographie';
            break;
        default:
            $title = 'page-404';
            inculde '../templates/page-404.';
    }
} else {
    $title = 'accueil';
    include '../templates/accueil.php';
}