<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page contact
 *
 * @return void
 */
function generateContactPage() {
    $data = [
        'page_title' => "Contact | CALUFA",
        'view' => 'app/view/common/pagesfooter/contact.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'pagesfooter.css',
    ];

    generatePage($data);
}