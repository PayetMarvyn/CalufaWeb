<?php

require_once 'app/controller/controller.php';
require_once 'app/model/biere.model.php';

/**
 * controller en charge de la génération de la page catalogue
 *
 * @return void
 */
function generateCataloguePage() {
    $data = [
        'bieres' => getAllBieres(),
        'page_title' => "CalufaWeb - Nos bières",
        'view' => 'app/view/catalogue.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'catalogue.css',
    ];

    generatePage($data);
}