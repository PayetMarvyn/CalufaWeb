<section class="carrousel">
    <button id="prevBtn" class="carrousel-btn gauche">&#8592;</button>

    <?php foreach ($bieres as $index => $biere): ?>
        <div class="carrousel-carte" data-index="<?= $index ?>">
            <div class="carrousel-contenu">
                <div class="carrousel-image">
                    <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>">
                        <img src="<?= '../../../public/images/' . $biere['imagepng_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>">
                    </a>
                </div>
                <div class="carrousel-texte">
                    <h2><?= $biere['nom'] ?></h2>
                    <p><?= $biere['description'] ?></p>
                    <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>">
                        <button class="carrousel-btnplus">En savoir plus +</button>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <button id="nextBtn" class="carrousel-btn droite">&#8594;</button>
</section>

<script src="../../../public/js/fonctionalites.js"></script>
<main>
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
        <h1>Notre premier lancement !</h1>
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
            <div><img src="../../../public/images/partenaire1.png" alt="Draskan"></div>
        </div>
    </section>
</main>