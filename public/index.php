<?php

#
//  Contrôleur frontal
if (isset($_GET['p'])) {
    switch($_GET['p']) {
        case 'geographie':
            $title = 'geographie';
            include '../templates/geographie.php';
            break;
        case 'histoire':
            $title = 'histoire';
            include '../templates/histoire.php';
            break;
        case 'culture':
            $title = 'culture';
            include '../templates/culture.php';
            break;
        case 'galerie':
            $title = 'galerie';
            include '../templates/galerie.php';
            break;
        case 'contact':
            $title = 'contact';
            include '../templates/contact.php';
            break;
        case 'liens':
            $title = 'liens';
            include '../templates/liens.php';
            break;
        default:
            $title = 'page-404';
            include '../templates/page-404.php';
    }
} else {
    $title = 'accueil';
    include '../templates/accueil.php';
}