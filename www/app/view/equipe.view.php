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
                    <p><?= $membre['description'] ?></p>
                </div>
            <?php endforeach; ?>
            <section>

                <br>
                <br>

            <iframe style="border-radius: 20px;" width="738" height="415" src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      
</main>