<?php
session_start();

require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/controller.php';

$route = 'accueil';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}

// Définir les routes exemptées de vérification d'âge
$pages_sans_verif_age = ['verificationage'];

// Vérification d'âge obligatoire pour toutes les autres routes
if (empty($_SESSION['age_verifie']) && !in_array($route, $pages_sans_verif_age)) {
    // Enregistrer la route d'origine pour redirection après vérification
    $_SESSION['redirect_after_age'] = "index.php?route=" . $route;

    // Ajouter les paramètres GET éventuels (comme un ID de bière)
    $params = [];
    foreach ($_GET as $key => $value) {
        if ($key !== 'route') {
            $params[] = urlencode($key) . '=' . urlencode($value);
        }
    }
    if (!empty($params)) {
        $_SESSION['redirect_after_age'] .= '&' . implode('&', $params);
    }

    // Redirection vers la page de vérification d'âge
    header("Location: index.php?route=verificationage");
    exit();
}

// ROUTER
switch ($route) {
    case 'accueil':
        require_once('app/controller/accueil.controller.php');
        generateHomePage();
        break;

    case 'catalogue':
        require_once('app/controller/catalogue.controller.php');
        generateCataloguePage();
        break;

    case 'biere':
        require_once('app/controller/biere.controller.php');
        generateBierePage();
        break;

    case 'equipe':
        require_once('app/controller/equipe.controller.php');
        generateEquipePage();
        break;

    case 'fabrication':
        require_once('app/controller/fabrication.controller.php');
        generateFabricationPage();
        break;

    case 'histoire':
        require_once('app/controller/histoire.controller.php');
        generateHistoirePage();
        break;

    case 'mentions':
        require_once('app/controller/mentions.controller.php');
        generateMentionsPage();
        break;

    case 'faq':
        require_once('app/controller/faq.controller.php');
        generateFaqPage();
        break;

    case 'contact':
        require_once('app/controller/contact.controller.php');
        generateContactPage();
        break;

    case 'panier':
        require_once('app/controller/panier.controller.php');
        generatePanierPage();
        break;

    case 'verificationage':
        require_once('app/controller/verificationage.controller.php');
        generateVerificationAgePage();
        break;

    case 'reset': // Utilitaire pour déboguer et réinitialiser la session
        session_destroy();
        header("Location: index.php");
        exit();

    case 'pagenontrouvable404':
        require_once('app/controller/page404.controller.php');
        generatePageNonTrouvable();

    default:
        require_once('app/controller/page404.controller.php');
        generatePageNonTrouvable();
        exit();
}