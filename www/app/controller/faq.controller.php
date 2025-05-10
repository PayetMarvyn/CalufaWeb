<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page FAQ
 * 
 * @return void
 */
function generateHomePage() {
    $data = [
        'page_title' => "CalufaWeb - FAQ",
        'view' => 'app/view/common/pagesfooter/faq.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}