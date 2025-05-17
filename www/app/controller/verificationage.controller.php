<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page verification d'âge
 *
 * @return void
 */
function generateVerificationAgePage() {
    $data = [
        'page_title' => "CalufaWeb - Verifierification d'âge",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}