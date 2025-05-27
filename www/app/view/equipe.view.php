<main>
    <section>
        <h1>Nous sommes</h1>

        <h2>Équipe Développement de la marque (MMI)</h2>
        <section class=trombinoscope>
            <?php foreach ($equipe as $membre): ?>
                <?php if ($membre['id_personne'] == 6): ?>
                    <?php break; ?>
                <?php endif; ?>
                <div class="carte">
                    <img src="<?= '../../../public/images/' . $membre['image_url'] ?>" alt="Membre <?= $membre['id_personne'] ?>">
                    <p><?= $membre['prenom'] ?> <?= $membre['nom'] ?></p>
                    <p><?= $membre['equipe_type'] ?></p>
                    <p><?= $membre['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </section>

        <h2>Équipe Génie Biologique</h2>

        <section class=trombinoscope>


            <?php foreach ($equipe as $membre): ?>
                <?php if ($membre['id_personne'] < 6) continue; ?>
                <div class="carte">
                    <img src="<?= '../../../public/images/' . $membre['image_url'] ?>" alt="Membre <?= $membre['id_personne'] ?>">
                    <p><?= $membre['prenom'] ?> <?= $membre['nom'] ?></p>
                    <p><?= $membre['equipe_type'] ?></p>
                    <p><?= $membre['description'] ?></p>
                </div>
            <?php endforeach; ?>
            <section>

            <!-- Ajout de la vidéo coulisse -->
                

                
</main>