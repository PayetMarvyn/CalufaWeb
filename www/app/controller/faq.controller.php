<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page FAQ
 * 
 * @return void
 */
function generateFaqPage() {
    $data = [
        'page_title' => "FAQs | CALUFA",
        'view' => 'app/view/common/pagesfooter/faq.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'pagesfooter.css',
    ];

    generatePage($data);
}