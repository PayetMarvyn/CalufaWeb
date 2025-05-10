<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page catalogue
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'page_title' => "CalufaWeb - Nos bières",
        'view' => 'app/view/catalogue.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}