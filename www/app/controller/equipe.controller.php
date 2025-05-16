<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page equipe
 *
 * @return void
 */
function generateEquipePage() {
    $data = [
        'page_title' => "CalufaWeb - L'équipe",
        'view' => 'app/view/equipe.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}