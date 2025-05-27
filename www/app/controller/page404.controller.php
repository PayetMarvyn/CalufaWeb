<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page 404 s'il modifie le url
 *
 * @return void
 */
function generatePageNonTrouvable() {
    $data = [
        'page_title' => "CalufaWeb - Erreur 404",
        'view' => 'app/view/page404.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'page404.css',
    ];

    generatePage($data);
}