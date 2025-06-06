<?php

require_once 'app/controller/controller.php';

/**
 * Génère la page panier
 */
function generatePanierPage() {
    $data = [
        'page_title' => "Panier | CALUFA",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'panier.css',
        'panier' => $_SESSION['panier'] ?? []
    ];

    generatePage($data);
}

/**
 * Ajoute un produit au panier
 */
function ajouterAuPanier() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        require_once('app/controller/page404.controller.php');
        generatePageNonTrouvable();
        exit();
    }

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = (float) $_POST['prix'];
    $image = $_POST['image'];

    // Vérifie si l'article est déjà présent
    $trouvé = false;
    foreach ($_SESSION['panier'] as &$article) {
        if ($article['id'] == $id) {
            $article['quantite']++;
            $trouvé = true;
            break;
        }
    }

    if (!$trouvé) {
        $_SESSION['panier'][] = [
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'image' => $image,
            'quantite' => 1
        ];
    }

    $_SESSION['toast'] = "Produit ajouté au panier !";

    // Redirection vers la page d'origine
    $redirectUrl = $_POST['redirect_url'] ?? 'index.php?route=catalogue';
    header('Location: ' . $redirectUrl);
    exit();
}
