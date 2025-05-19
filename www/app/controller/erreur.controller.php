<?php

require_once 'app/controller/controller.php';

/*
 * controller en charge de la génération de la page FAQ
 */
function generateErreurPage() {
    $data = [
        'page_title' => "CalufaWeb - Oups ! Erreur",
        'view' => 'app/view/erreur.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}