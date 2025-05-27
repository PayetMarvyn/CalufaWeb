<?php

require_once 'app/controller/controller.php';

function generateVerificationAgePage() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['accepte_age']) && $_POST['accepte_age'] === 'oui') {
            $_SESSION['age_verifie'] = true;

            // Redirige vers la page demandée initialement
            if (!empty($_SESSION['redirect_after_age'])) {
                $url = $_SESSION['redirect_after_age'];
                unset($_SESSION['redirect_after_age']);
                header("Location: $url");
                exit();
            }

            header("Location: index.php?route=accueil");
            exit();
        } else {
            // Redirige vers une page d'information pour les mineurs
            header("Location: https://www.jeunes.gouv.fr/trouver-de-l-aide-avec-addict-aide-le-village-des-addictions-1009");
            exit();
        }
    }

    $data = [
        'page_title' => "CalufaWeb - Vérification d'âge",
        'view' => 'app/view/verificationage.view.php',
        'layout' => 'app/view/common/layout.php',
        'pageSpecificCss' => 'verifage.css',
    ];

    generatePage($data);
}
