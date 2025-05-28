<?php
require_once 'app/controller/controller.php';
require_once 'app/model/equipe.model.php';
/**
 * controller en charge de la génération de la page de l'equipe
 *
 * @return void
 */
function generateEquipePage() {
    $data = [
        'equipe' => getAllMembers(),
        'page_title' => "La team | CALUFA",
        'view' => 'app/view/equipe.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'equipe.css',
    ];

    generatePage($data);
}