<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page mentions légales
 *
 * @return void
 */
function generateMentionsPage(){
    $data = [
        'page_title' => "Mentions légales | CALUFA",
        'view' => 'app/view/common/pagesfooter/mentions.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'pagesfooter.css',
    ];

    generatePage($data);
}
