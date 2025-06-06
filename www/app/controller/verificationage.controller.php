<?php

require_once 'app/controller/controller.php';

// Génère la page de vérification d'âge
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
        'page_title' => "CALUFA",
        'view' => 'app/view/verificationage.view.php',
        'layout' => 'app/view/common/layoutverifage.php',
        'pageSpecificCss' => 'verifage.css',
    ];

    generatePage($data);
}

// Vérifie si l'âge de l'utilisateur a été vérifié
function verifyAge() {
    $route = $_GET['route'] ?? 'accueil';

    $pages_sans_verif_age = ['verificationage'];

    if (empty($_SESSION['age_verifie']) && !in_array($route, $pages_sans_verif_age)) {
        $_SESSION['redirect_after_age'] = "index.php?route=" . $route;

        $params = [];
        foreach ($_GET as $key => $value) {
            if ($key !== 'route') {
                $params[] = urlencode($key) . '=' . urlencode($value);
            }
        }
        if (!empty($params)) {
            $_SESSION['redirect_after_age'] .= '&' . implode('&', $params);
        }

        header('Location: index.php?route=verificationage');
        exit();
    }
}
