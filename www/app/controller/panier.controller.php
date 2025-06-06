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
    $quantite = (int) $_POST['quantite'];

    // S'assurer que la quantité est entre 1 et 5
    if ($quantite < 1) $quantite = 1;
    if ($quantite > 5) $quantite = 5;

    $trouve = false;
    foreach ($_SESSION['panier'] as &$article) {
        if ($article['id'] == $id) {
            // Remplace la quantité par la nouvelle quantité sélectionnée
            $article['quantite'] = $quantite;
            $trouve = true;
            break;
        }
    }

    if (!$trouve) {
        $_SESSION['panier'][] = [
            'id' => $id,
            'nom' => $nom,
            'prix' => $prix,
            'image' => $image,
            'quantite' => $quantite
        ];
    }

    $_SESSION['toast'] = "Produit ajouté au panier !";

    $redirectUrl = $_POST['redirect_url'] ?? 'index.php?route=catalogue';
    header('Location: ' . $redirectUrl);
    exit();
}
