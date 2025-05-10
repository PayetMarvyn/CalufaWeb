<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page mentions légales
 *
 * @return void
 */
function generateHomePage(){
    $data = [
        'page_title' => "CalufaWeb - Mentions légales",
        'view' => 'app/view/common/pagesfooter/mentions.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
