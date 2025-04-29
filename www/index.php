<?php
require_once 'config.php';
require_once 'model.php';
$pdo = getDatabaseConnexion();
$query = $pdo->prepare("SELECT * FROM `bieres`");
$query->execute();
$bieres = $query->fetchAll();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | CALUFA.com</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="catalogue.html">Nos bières</a></li>
                <li><a href="fabrication.html">Fabrication</a></li>
                <li>
                    <div>
                        <a href="index.php"><img src="images/logo_calufa.png"></a>
                    </div>
                </li>
                <li><a href="histoire.html">Histoire</a></li>
                <li><a href="equipe.html">Équipe</a></li>
                <li><img src="images/shoppingcart.svg" style="width: 1em;"></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="carrousel">
            <?php foreach ($bieres as $biere): ?>
                <div class="carrousel-carte">
                    <a href="bière.html"><img src="<?= 'images/' . $biere ['image_url'] ?>" alt="Bière 1"></a>
                    <h2> <?= $biere ['nom'] ?> </h2>
                    <h3>Phrase d'accroche</h3>
                    <p><?= $biere ['description'] ?></p>
                    <button> En savoir plus +</button>
                </div>
            <?php endforeach; ?>

        </section>

        <script src="carrousel.js"></script>


        <section class="accueil">
            <h1>QUE CALUFA !</h1>
            <h2>Phrase d'accroche</h2>
            <p class="description">
                FauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFaux
                texteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexte
                FauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFaux
                texteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtex
                teFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexte
                FauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFaux
                texteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtext
                eFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFau
                xtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtex
                teFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexteFauxtexte
            </p>
        </section>

        <section class="pub">
            <h1>Notre premiér lancement !</h1>
            <h2>Phrase d'accroche</h2>
            </p>la video est seulement un test</p>
            <iframe width="760" height="415" src="https://www.youtube.com/embed/wloQQptLYeE?si=s1p3EOGIQH1Plhnn"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="collaborations">

            <h1>Nous collaborons avec</h1>
            <div class="collabs">
                <div><img src="images/partenaire1.png" alt="Draskan"></div>
                <div><img src="images/partenaire2.png" alt="Ember"></div>
                <div><img src="images/partenaire3.png" alt="Kisen"></div>
                <div><img src="images/partenaire4.png" alt="Odysseia"></div>
            </div>
        </section>

    </main>

    <footer>
        <div class="apropos">
            <p style="font-size: 2em;">À propos</p>

            <p><a
                    href="https://docs.google.com/forms/d/e/1FAIpQLSePbi0Q9iKydc_gYNCUrdoqjOQtKMYrxFsCVH8rt7oD6IwjiA/viewform">Donnez-nous
                    votre avis</a>
            <p>
            <p><a href="footer/mentions.html">Mentions légales</a></p>
            <p><a href="footer/contact.html">Nous contacter</a></p>
            <p><a href="footer/faq.html">FAQ</a></p>
            </p>
        </div>

        <div>
            <img style="width: 20%; margin-bottom: 1em;" src="images/logo_calufa.png" alt="Logo CALUFA">
            <p style="margin-bottom: 1em;">&copy; 2025 CALUFA. Tous droits réservés.</p>
            <p><span style="font-family:sans-serif ;">Attention, l'abus d'alcool est dangereux pour la santé.<br>
                    À consommer avec modération.</span>
            </p>
        </div>

        <div class="reseaux-sociaux">
            <p>Suivez nous !</p>
            <a href="#"><img src="images/youtube.svg"></a>
            <a href="#"><img src="images/insta.svg"></a>
            <a href="#"><img src="images/tiktok.svg"></a>
        </div>
    </footer>
</body>