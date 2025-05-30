<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page catalogue
 *
 * @return void
 */
function generatePanierPage() {
    $data = [
        'page_title' => "Panier | CALUFA",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
        'panier' => $_SESSION['panier'] ?? []
    ];

    generatePage($data);
}