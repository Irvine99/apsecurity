<?php
// index.php

// Inclure l'en-tête de la page
include('templates/module/head.php');

// Inclure l'en-tête commun (header)
include('templates/module/header.php');

// Vérifier si un paramètre "page" est passé dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Par défaut, on affiche la page d'accueil

// Inclure la page spécifique demandée
$valid_pages = [
    'home' => 'templates/page/homepage.php',
    'mentions' => 'templates/page/mentionslegales.php',
    'politique' => 'templates/page/politiqueConfidentialite.php',
    // Ajouter d'autres pages ici si nécessaire
    // 'seahawks' => 'page/projet/seahawks/homepage.php',
];

// Vérifier si la page demandée est valide et inclure la page correspondante
if (array_key_exists($page, $valid_pages)) {
    include($valid_pages[$page]);
} else {
    // Si la page n'existe pas, inclure la page d'accueil par défaut
    include('page/homepage.php');
}

// Inclure le pied de page commun (footer)
include('templates/module/footer.php');
?>
