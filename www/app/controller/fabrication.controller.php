<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page fabrication
 *
 * @return void
 */
function generateFabricationPage() {
    $data = [
        'page_title' => "Fabrication | CALUFA",
        'view' => 'app/view/fabrication.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'fabrication.css',
    ];

    generatePage($data);
}