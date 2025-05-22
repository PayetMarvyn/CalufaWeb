<main>
    <section class="catalogue">
        <?php foreach ($bieres as $biere): ?>
            <div class="catalogue-carte">
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>"><img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>">
                <h2> <?= $biere['nom'] ?> </h2>
                <p><?= $biere['description'] ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
</main>