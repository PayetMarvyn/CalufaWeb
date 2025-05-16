<main>
    <section>
        <h1>Trombinoscopes</h1>

        <h2>Équipe MMI</h2>
        <section class=trombinoscope>
            <?php foreach ($equipe as $membre): ?>
                <?php if ($membre['id_personne'] == 6): ?>
                    <?php break; ?>
                <?php endif; ?>
                <div class="carte">
                    <img src="<?= '../../../public/images/' . $membre['image_url'] ?>" alt="Membre <?= $membre['id_personne'] ?>">
                    <p><?= $membre['prenom'] ?> <?= $membre['nom'] ?></p>
                    <p><?= $membre['description'] ?></p>
                </div>
            <?php endforeach; ?>

            <h2>Équipe GB</h2>

            <?php foreach ($equipes as $membre): ?>
                <div class="carte">
                    <img src="<?= '../../../public/images/' . $membre['image_url'] ?>" alt="Membre <?= $biere['id_personne'] ?>"></a>
                    <p><?= $membre['prenom'] ?> <?= $membre['nom'] ?></p>
                    <p><?= $biere['description'] ?></p>
                </div>
            <?php endforeach; ?>
        <section>
                <script src="../../public/js/fonctionalites.js"></script>
    </section>
</main>