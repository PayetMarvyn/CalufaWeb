<?php
require_once 'app/controller/controller.php';
require_once 'app/model/biere.model.php';
/**
 * controller en charge de la génération de la page d'accueil
 *
 * @return void
 */
function generateHomePage() {
    $data = [
        'bieres' => getAllBieres(),
        'page_title' => "CalufaWeb - Accueil",
        'page_description' => "Bienvenue sur le site de Calufa, lieu des biéres les plus fraîches et coulantes !",
        'view' => 'app/view/accueil.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'accueil.css',
    ];

    generatePage($data);
}