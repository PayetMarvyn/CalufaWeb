<?php
session_start();

require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/controller.php';

$route = 'accueil';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}

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

    default:
        exit;
}