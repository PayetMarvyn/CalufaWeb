<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page histoire
 *
 * @return void
 */
function generateHistoirePage() {
    $data = [
        'page_title' => "Notre histoire | CALUFA",
        'view' => 'app/view/histoire.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'histoire.css',
    ];

    generatePage($data);
}