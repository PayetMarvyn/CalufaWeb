
<main> 
    <section class="catalogue">
        <?php foreach ($bieres as $biere): ?>
            <div class="catalogue-carte">
                <a href="index.php?route=biere&id=<?= $biere['id_biere']?>"><img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>"></a>
                <h2> <?= $biere['nom'] ?> </h2>
                <p><?= $biere['description'] ?></p>
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>"><button> En savoir plus +</button></a>
            </div>
        <?php endforeach; ?>
    </section>

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