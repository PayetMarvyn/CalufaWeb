<?php

require_once 'app/controller/controller.php';
require_once 'app/model/biere.model.php';

/**
 * controller en charge de la génération de la page bière
 *
 * @return void
 */
function generateBierePage() {

    $id = $_GET['id'];

    $data = [
        'biere' => getBiere($id),
        'page_title' => "Bière | CALUFA",
        'view' => 'app/view/biere.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'biere.css',
    ];

    generatePage($data);
}