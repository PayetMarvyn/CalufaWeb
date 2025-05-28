<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="icon" type="image/png" href="/public/images/logo_calufa.png">
    <link rel="stylesheet" href="/public/css/styles.css">
    <?php if (!empty($pageSpecificCss)): ?>
        <link rel="stylesheet" href="/public/css/<?= htmlspecialchars($pageSpecificCss) ?>">
    <?php endif; ?>
    <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<script src="../../../public/js/fonctionalites.js"></script>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../../index.php?route=catalogue">Nos bières</a></li>
                <li><a href="../../../index.php?route=fabrication">Fabrication</a></li>
                <li>
                    <div>
                        <a href="../../../index.php?route=accueil"><img src="../../../public/images/logo_calufa.png"></a>
                    </div>
                </li>
                <li><a href="../../../index.php?route=histoire">Histoire</a></li>
                <li><a href="../../../index.php?route=equipe">Équipe</a></li>
                <li><a href="../../../index.php?route=panier"><img src="../../../public/images/shoppingcart.svg" style="width: 1em;"></a></li>
            </ul>
        </nav>
    </header>