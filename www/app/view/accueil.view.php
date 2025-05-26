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
        <h2>La chaleur, on la boit glacée.</h2>
        <p class="description">
            Née sous le soleil de Porto Rico, CALUFA est une bière artisanale pensée pour ceux qui veulent<br>
            échapper à l’ordinaire. Chaque gorgée est une aventure, une brise fraîche dans la chaleur tropicale.<br>
        </p>
    </section>

    <section class="histoire">
        <h1>Jorge la grenouille</h1>
        <h2>Rencontrez notre grenouille exploratrice</h2>
        <p class="description">
            Elle vous guide à travers plusieurs destinations de l'Amérique latine pour vous faire découvrir<br>
            les goûts des bières les plus uniques. Elle est drôle, curieuse, intrépide et jamais à court d’idées...
        </p>
        <a href="index.php?route=histoire">
            <button class="carrousel-btnplus">Découvrez notre histoire >>></button>
        </a>
    </section>

    <section class="pub">
        <h1>Notre premier lancement !</h1>
        <h2>Découvrez CALUFA en action.</h2>
        <iframe style="border-radius: 20px;" width="738" height="415" src="https://www.youtube.com/embed/NCARnHIXZlA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <section class="collaborations">

        <h1>Nous collaborons avec</h1>
        <div class="collabs">
            <div><img src="../../../public/images/partenaire1.png" alt="Draskan"></div>
            <div><img src="../../../public/images/partenaire2.png" alt="Odysseia"></div>
        </div>
    </section>

    <section class="newsletter">
        <div class="newsletter-contenu">
            <h2>Rejoins le Club CALUFA</h2>
            <p>Reste informé des nouvelles saveurs, des soirées tropicales<br>
                et des actus fraîches de l’île 🌴</p>
            <form>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="email" name="email" placeholder="E-mail" required>

                <label class="checkbox-label">
                    <input type="checkbox" required>
                    Je confirme avoir vendu mon âme au dieu Jorge pour recevoir des newsletters, promotionnelles et publicitaires 🍺🐸
                </label>

                <button type="submit" class="carrousel-btnplus">Je m’inscris</button>
            </form>
        </div>
    </section>
</main>