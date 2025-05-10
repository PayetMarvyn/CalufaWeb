<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page bière
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'page_title' => "CalufaWeb - Bière",
        'view' => 'app/view/biere.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}